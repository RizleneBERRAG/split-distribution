<?php

it('loads no tracker and shows no cookie banner without a GTM id', function () {
    $this->withoutVite();
    config(['services.gtm.id' => null]);

    $this->get('/')
        ->assertOk()
        ->assertDontSee('googletagmanager.com', false)
        ->assertDontSee('id="cookie-consent"', false)
        ->assertDontSee('data-open-cookie-consent', false);
});

it('waits for consent before loading Google Tag Manager', function () {
    $this->withoutVite();
    config(['services.gtm.id' => 'GTM-TEST123']);

    $this->get('/')
        ->assertOk()
        ->assertSee("gtag('consent', 'default'", false)
        ->assertSee("ad_user_data: 'denied'", false)
        ->assertSee('"GTM-TEST123"', false)
        ->assertSee('id="cookie-consent"', false)
        ->assertSeeText('Tout refuser')
        ->assertSeeText('Tout accepter')
        ->assertSee('data-open-cookie-consent', false);
});
