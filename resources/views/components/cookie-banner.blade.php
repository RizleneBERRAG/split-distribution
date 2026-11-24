{{-- Bandeau cookies : affiché seulement si Google Tag Manager est configuré (GTM_ID). --}}
@if (config('services.gtm.id'))
    <section
        class="cookie-consent"
        id="cookie-consent"
        aria-labelledby="cookie-consent-title"
        tabindex="-1"
        hidden
    >
        <h2 class="cookie-consent__title" id="cookie-consent-title">
            Vos choix sur les cookies
        </h2>

        <p class="cookie-consent__text">
            Avec votre accord, nous mesurons la fréquentation du site et les résultats
            de nos publicités. Refuser ne change rien à votre navigation, et vous pouvez
            changer d’avis en bas de page.
            <a href="{{ route('legal.privacy') }}">En savoir plus</a>
        </p>

        <form class="cookie-consent__options" id="cookie-consent-options" hidden>
            <label class="cookie-consent__option">
                <input type="checkbox" checked disabled>
                <span>
                    <strong>Nécessaires</strong>
                    Fonctionnement et sécurité du site. Toujours actifs.
                </span>
            </label>

            <label class="cookie-consent__option">
                <input type="checkbox" name="analytics">
                <span>
                    <strong>Mesure d’audience</strong>
                    Savoir quelles pages sont consultées, pour améliorer le site.
                </span>
            </label>

            <label class="cookie-consent__option">
                <input type="checkbox" name="ads">
                <span>
                    <strong>Publicité</strong>
                    Mesurer les résultats de nos annonces et vous proposer des annonces adaptées.
                </span>
            </label>
        </form>

        <div class="cookie-consent__actions">
            <button type="button" class="button button--light" data-consent="refuse">
                <span>Tout refuser</span>
            </button>

            <button type="button" class="button button--light" data-consent="accept">
                <span>Tout accepter</span>
            </button>

            <button type="button" class="cookie-consent__link" data-consent="customize">
                Personnaliser
            </button>

            <button type="button" class="cookie-consent__link" data-consent="save" hidden>
                Enregistrer mes choix
            </button>
        </div>
    </section>
@endif
