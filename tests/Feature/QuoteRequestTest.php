<?php

use App\Mail\QuoteRequestMail;
use App\Models\QuoteRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

function validQuote(array $overrides = []): array
{
    return array_merge([
        'family' => 'pompes-a-chaleur',
        'project' => 'renovation',
        'building' => 'maison',
        'quantity' => '2 unités, 8 kW',
        'timeline' => 'un-mois',
        'details' => 'Deux PAC air/eau pour une maison individuelle à Lyon.',
        'profile' => 'installateur',
        'name' => 'Camille Martin',
        'company' => 'Clima Pro',
        'email' => 'camille@example.com',
        'phone' => '06 10 20 30 40',
        'postcode' => '69003',
        'utm_source' => 'meta',
        'utm_campaign' => 'haier-r290',
        'privacy' => '1',
        'website' => '',
    ], $overrides);
}

it('shows the four-step quote page', function () {
    $this->withoutVite();

    $this->get(route('devis'))
        ->assertOk()
        ->assertViewIs('pages.devis')
        ->assertSeeText('en quatre étapes.')
        ->assertSee('data-step="4"', false)
        ->assertSee(route('legal.privacy'));
});

it('pre-selects the family coming from a solution page', function () {
    $this->withoutVite();

    $this->get(route('devis', ['famille' => 'pompes-a-chaleur']))
        ->assertOk()
        ->assertSee('value="pompes-a-chaleur" checked', false);

    $this->get(route('devis', ['famille' => 'inconnue']))
        ->assertOk()
        ->assertDontSee('" checked required', false);
});

it('links every page to the quote', function () {
    $this->withoutVite();

    $this->get('/')->assertSee(route('devis'));

    $this->get('/solutions/climatisation')
        ->assertSee(route('devis', ['famille' => 'climatisation']), false);
});

it('validates quote requests', function () {
    $this->post(route('devis.submit'))
        ->assertSessionHasErrors([
            'family', 'project', 'building', 'timeline', 'details',
            'profile', 'name', 'company', 'email', 'phone', 'postcode', 'privacy',
        ]);

    expect(QuoteRequest::count())->toBe(0);
});

it('stores the request, emails the team with the attachment and thanks the visitor', function () {
    Mail::fake();
    Storage::fake('local');
    config(['contact.recipient' => 'devis@split.test']);

    $response = $this->post(route('devis.submit'), validQuote([
        'attachment' => UploadedFile::fake()->create('liste-references.pdf', 120, 'application/pdf'),
    ]));

    $quote = QuoteRequest::sole();

    $response
        ->assertRedirect(route('devis'))
        ->assertSessionHas('status', fn ($status) => str_contains($status, $quote->reference()));

    expect($quote)
        ->company->toBe('Clima Pro')
        ->utm_campaign->toBe('haier-r290')
        ->attachment_name->toBe('liste-references.pdf')
        ->and($quote->reference())->toBe('DEV-000001')
        ->and($quote->label('family'))->toBe('Pompes à chaleur');

    Storage::disk('local')->assertExists($quote->attachment_path);

    Mail::assertSent(
        QuoteRequestMail::class,
        fn (QuoteRequestMail $mail) => $mail->hasTo('devis@split.test')
            && $mail->hasReplyTo('camille@example.com')
            && $mail->quote->is($quote)
            && count($mail->attachments()) === 1,
    );
});

it('shows a confirmation instead of the form once the request is sent', function () {
    Mail::fake();
    $this->withoutVite();

    $this->followingRedirects()
        ->post(route('devis.submit'), validQuote())
        ->assertOk()
        ->assertSeeText('Merci, c’est bien reçu !')
        ->assertSeeText('DEV-000001')
        ->assertDontSee('data-devis-form', false);
});

it('rejects quote bots using the honeypot', function () {
    Mail::fake();

    $this->post(route('devis.submit'), validQuote(['website' => 'https://spam.example.com']))
        ->assertSessionHasErrors('website');

    expect(QuoteRequest::count())->toBe(0);
    Mail::assertNothingSent();
});

it('refuses files that are not documents or images', function () {
    Mail::fake();
    Storage::fake('local');

    $this->post(route('devis.submit'), validQuote([
        'attachment' => UploadedFile::fake()->create('script.exe', 10, 'application/octet-stream'),
    ]))->assertSessionHasErrors('attachment');

    expect(QuoteRequest::count())->toBe(0);
});

it('renders a static-compatible quote form for the online preview', function () {
    $this->withoutVite();
    config(['contact.static_action' => 'https://formsubmit.co/contact@split-distribution.fr']);

    $this->get(route('devis'))
        ->assertOk()
        ->assertSee('action="https://formsubmit.co/contact@split-distribution.fr"', false)
        ->assertSee('enctype="multipart/form-data"', false)
        ->assertSee('name="_honey"', false)
        ->assertSee('/devis?sent=1', false)
        ->assertDontSee('name="_token"', false);
});

it('exports quote requests to a CSV file', function () {
    Storage::fake('local');

    QuoteRequest::create(collect(validQuote())->except(['privacy', 'website'])->all());

    $this->artisan('devis:export')->assertSuccessful();

    $files = Storage::disk('local')->files('exports');

    expect($files)->toHaveCount(1)
        ->and(Storage::disk('local')->get($files[0]))
        ->toContain('DEV-000001')
        ->toContain('Clima Pro')
        ->toContain('Pompes à chaleur');
});
