<?php

dataset('completed public pages', [
    'home' => ['/', 'pages.home', 'Le bon matériel.'],
    'solutions' => ['/solutions', 'pages.solutions.index', 'Des solutions'],
    'climatisation' => [
        '/solutions/climatisation',
        'pages.solutions.climatisation',
        'Climatisation',
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
    ])->each->toBeFile();
});
