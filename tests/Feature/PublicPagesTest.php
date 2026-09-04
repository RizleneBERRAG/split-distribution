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
            && $mail->contact['subject'] === $contact['subject'],
    );
});
