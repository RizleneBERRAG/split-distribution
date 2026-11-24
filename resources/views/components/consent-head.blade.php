{{--
    Consentement aux cookies + Google Tag Manager (mode Consentement v2).

    Rien n'est actif tant que GTM_ID est vide dans le .env.
    Quand il est rempli :
    - tous les signaux de consentement partent « refusés » ;
    - Google Tag Manager n'est chargé qu'après un « oui » (mesure d'audience ou publicité) ;
    - le choix est gardé environ 6 mois, puis le bandeau revient.
--}}
@if ($gtmId = config('services.gtm.id'))
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { window.dataLayer.push(arguments); }

        gtag('consent', 'default', {
            ad_storage: 'denied',
            ad_user_data: 'denied',
            ad_personalization: 'denied',
            analytics_storage: 'denied',
            functionality_storage: 'granted',
            security_storage: 'granted',
            wait_for_update: 500
        });

        window.splitConsent = (function () {
            var STORAGE_KEY = 'split-consent';
            var MAX_AGE = 182 * 24 * 60 * 60 * 1000;
            var TRACKER_COOKIES = /^(_ga|_gid|_gat|_gcl|_fbp|_fbc)/;
            var gtmId = @json($gtmId);
            var gtmLoaded = false;

            function read() {
                try {
                    var stored = JSON.parse(window.localStorage.getItem(STORAGE_KEY));

                    if (stored && stored.version === 1 && Date.now() - stored.date < MAX_AGE) {
                        return stored;
                    }
                } catch (error) {}

                return null;
            }

            function loadGtm() {
                gtmLoaded = true;
                window.dataLayer.push({ 'gtm.start': Date.now(), event: 'gtm.js' });

                var script = document.createElement('script');
                script.async = true;
                script.src = 'https://www.googletagmanager.com/gtm.js?id=' + encodeURIComponent(gtmId);
                document.head.appendChild(script);
            }

            function clearTrackers() {
                var domain = location.hostname.replace(/^www\./, '');

                document.cookie.split(';').forEach(function (cookie) {
                    var name = cookie.split('=')[0].trim();

                    if (TRACKER_COOKIES.test(name)) {
                        document.cookie = name + '=; Max-Age=0; path=/';
                        document.cookie = name + '=; Max-Age=0; path=/; domain=.' + domain;
                    }
                });
            }

            function apply(choice) {
                gtag('consent', 'update', {
                    analytics_storage: choice.analytics ? 'granted' : 'denied',
                    ad_storage: choice.ads ? 'granted' : 'denied',
                    ad_user_data: choice.ads ? 'granted' : 'denied',
                    ad_personalization: choice.ads ? 'granted' : 'denied'
                });

                window.dataLayer.push({
                    event: 'consentement_mis_a_jour',
                    consentement_mesure_audience: choice.analytics,
                    consentement_publicite: choice.ads
                });

                if (!choice.analytics || !choice.ads) {
                    clearTrackers();
                }

                if ((choice.analytics || choice.ads) && !gtmLoaded) {
                    loadGtm();
                }
            }

            function save(analytics, ads) {
                var choice = { version: 1, date: Date.now(), analytics: !!analytics, ads: !!ads };

                try {
                    window.localStorage.setItem(STORAGE_KEY, JSON.stringify(choice));
                } catch (error) {}

                apply(choice);

                return choice;
            }

            var stored = read();

            if (stored) {
                apply(stored);
            }

            return { current: read, save: save };
        })();
    </script>
@endif
