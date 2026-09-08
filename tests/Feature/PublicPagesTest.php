<?php

use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail;

dataset('completed public pages', [
    'home' => ['/', 'pages.home', 'Le bon matériel.'],
    'solutions' => ['/solutions', 'pages.solutions.index', 'Des solutions'],
    'climatisation' => [
        '/solutions/climatisation',
        'pages.solutions.climatisation',
        'Climatisation',
    ],
    'pompes à chaleur' => [
        '/solutions/pompes-a-chaleur',
        'pages.solutions.pompes-a-chaleur',
        'La chaleur de l’air',
    ],
    'contact' => [
        '/contact',
        'pages.contact',
        'Parlons de votre projet.',
    ],
    'services' => [
        '/services',
        'pages.services',
        'Plus qu’un fournisseur.',
    ],
    'entreprise' => [
        '/entreprise',
        'pages.entreprise',
        'La technique compte.',
    ],
    'mentions légales' => [
        '/mentions-legales',
        'pages.legal.mentions',
        'Mentions légales',
    ],
    'confidentialité' => [
        '/confidentialite',
        'pages.legal.privacy',
        'Des données protégées.',
    ],
]);

it('renders a completed public page', function (
    string $uri,
    string $view,
    string $expectedText,
) {
    $this->withoutVite();

    $response = $this->get($uri);

    $response
        ->assertOk()
        ->assertViewIs($view)
        ->assertSeeText($expectedText);
})->with('completed public pages');

it('ships every image used as a completed page hero', function () {
    expect([
        public_path('images/home/pac.webp'),
        public_path('images/home/climatisation.webp'),
        public_path('images/contact/technical-advice.webp'),
        public_path('images/services/order-preparation.webp'),
        public_path('images/entreprise/team-work.webp'),
    ])->each->toBeFile();
});

it('validates contact requests', function () {
    $this->post(route('contact.submit'))
        ->assertSessionHasErrors([
            'name',
            'company',
            'email',
            'subject',
            'message',
            'privacy',
        ]);
});

it('sends a valid contact request', function () {
    Mail::fake();
    config(['contact.recipient' => 'contact@split.test']);

    $contact = [
        'name' => 'Camille Martin',
        'company' => 'Clima Pro',
        'email' => 'camille@example.com',
        'phone' => '06 10 20 30 40',
        'subject' => 'technical',
        'message' => 'Nous souhaitons dimensionner une installation pour un commerce.',
        'privacy' => '1',
        'website' => '',
    ];

    $this->post(route('contact.submit'), $contact)
        ->assertRedirect()
        ->assertSessionHas('status');

    Mail::assertSent(
        ContactRequestMail::class,
        fn (ContactRequestMail $mail) => $mail->contact['email'] === $contact['email']
            && $mail->contact['subject'] === $contact['subject']
            && $mail->hasTo('contact@split.test'),
    );
});

it('rejects contact form bots using the honeypot', function () {
    Mail::fake();

    $this->post(route('contact.submit'), [
        'name' => 'Robot Test',
        'company' => 'Spam Company',
        'email' => 'robot@example.com',
        'subject' => 'project',
        'message' => 'Cette demande automatique remplit volontairement le champ invisible.',
        'privacy' => '1',
        'website' => 'https://spam.example.com',
    ])->assertSessionHasErrors('website');

    Mail::assertNothingSent();
});

it('links legal information from the footer and contact form', function () {
    $this->withoutVite();

    $this->get(route('contact'))
        ->assertOk()
        ->assertSee(route('legal.mentions'))
        ->assertSee(route('legal.privacy'))
        ->assertSeeText('politique de confidentialité');
});
