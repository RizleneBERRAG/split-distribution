/*
    Bandeau cookies.
    La logique de consentement (stockage, Google Tag Manager) est dans
    resources/views/components/consent-head.blade.php : elle doit tourner
    avant tout le reste, dans le <head>.
*/

const banner = document.querySelector('#cookie-consent');

if (banner && window.splitConsent) {

    const options = banner.querySelector('#cookie-consent-options');
    const customizeButton = banner.querySelector('[data-consent="customize"]');
    const saveButton = banner.querySelector('[data-consent="save"]');

    let returnFocus = null;

    const open = ({ customize = false } = {}) => {

        const current = window.splitConsent.current();

        options.elements.analytics.checked = Boolean(current?.analytics);
        options.elements.ads.checked = Boolean(current?.ads);

        options.hidden = !customize;
        customizeButton.hidden = customize;
        saveButton.hidden = !customize;

        banner.hidden = false;

    };

    const close = () => {

        banner.hidden = true;

        returnFocus?.focus();
        returnFocus = null;

    };

    banner.addEventListener('click', (event) => {

        const action = event.target.closest('[data-consent]')?.dataset.consent;

        if (action === 'accept') {
            window.splitConsent.save(true, true);
            close();
        }

        if (action === 'refuse') {
            window.splitConsent.save(false, false);
            close();
        }

        if (action === 'customize') {
            open({ customize: true });
            options.elements.analytics.focus();
        }

        if (action === 'save') {
            window.splitConsent.save(
                options.elements.analytics.checked,
                options.elements.ads.checked,
            );
            close();
        }

    });

    document
        .querySelectorAll('[data-open-cookie-consent]')
        .forEach((button) => {

            button.addEventListener('click', () => {
                returnFocus = button;
                open({ customize: true });
                banner.focus();
            });

        });

    if (!window.splitConsent.current()) {
        open();
    }

}
