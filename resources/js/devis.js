/*
    Demande de devis : le parcours en 4 étapes.
    Sans ce script, les 4 étapes s'affichent les unes sous les autres
    et le formulaire s'envoie normalement.
*/

const LABELS = {
    project: 'Type de projet',
    building: 'Bâtiment',
    timeline: 'Délai',
};

export const initDevis = () => {

    const form = document.querySelector('[data-devis-form]');

    if (!form) {
        return;
    }

    const panel = form.closest('.devis-panel');
    const steps = [...form.querySelectorAll('[data-step]')];
    const progress = [...document.querySelectorAll('[data-progress-step]')];
    const nav = form.querySelector('[data-devis-nav]');
    const back = form.querySelector('[data-devis-back]');
    const next = form.querySelector('[data-devis-next]');
    const recap = form.querySelector('[data-devis-recap]');

    // Version statique de l'aperçu : la famille et la provenance viennent de l'adresse.
    const params = new URLSearchParams(window.location.search);

    if (!form.querySelector('input[name="family"]:checked') && params.get('famille')) {
        const radio = form.querySelector(`input[name="family"][value="${CSS.escape(params.get('famille'))}"]`);

        if (radio) {
            radio.checked = true;
        }
    }

    ['utm_source', 'utm_medium', 'utm_campaign'].forEach((name) => {
        const field = form.querySelector(`input[name="${name}"]`);

        if (field && !field.value && params.get(name)) {
            field.value = params.get(name);
        }
    });

    let current = Number(form.dataset.startStep || 1);

    // Si la famille est déjà choisie (lien depuis une page Solutions), on passe à l'étape 2.
    if (!form.dataset.startStep && form.querySelector('input[name="family"]:checked')) {
        current = 2;
    }

    form.classList.add('is-wizard');
    panel?.classList.add('is-wizard');
    nav.hidden = false;


    /* ---------- Affichage d'une étape ---------- */

    const show = (number, { goingBack = false, focus = true } = {}) => {

        current = Math.min(Math.max(number, 1), steps.length);

        steps.forEach((step, index) => {
            const isCurrent = index + 1 === current;

            step.classList.toggle('is-current', isCurrent);
            step.classList.toggle('is-back', isCurrent && goingBack);
        });

        progress.forEach((item, index) => {
            item.classList.toggle('is-done', index + 1 < current);
            item.classList.toggle('is-current', index + 1 === current);
        });

        back.hidden = current === 1;
        next.hidden = current === steps.length;

        if (current === steps.length) {
            fillRecap();
        }

        if (focus) {
            const top = panel.getBoundingClientRect().top + window.scrollY - 110;

            if (window.scrollY > top) {
                window.scrollTo({ top, behavior: 'smooth' });
            }

            steps[current - 1].querySelector('.devis-step__title')?.focus({ preventScroll: true });
        }

    };


    /* ---------- Vérification des champs de l'étape ---------- */

    const stepIsValid = () => {

        const fields = [...steps[current - 1].querySelectorAll('input, select, textarea')]
            .filter((field) => field.type !== 'hidden' && !field.closest('.contact-trap'));

        const invalid = fields.find((field) => !field.checkValidity());

        if (invalid) {
            invalid.reportValidity();
            invalid.focus();
            return false;
        }

        return true;

    };


    /* ---------- Récapitulatif avant l'envoi ---------- */

    const fillRecap = () => {

        const chips = [];
        const family = form.querySelector('input[name="family"]:checked');

        if (family) {
            chips.push(family.closest('label').querySelector('strong').textContent.trim());
        }

        Object.keys(LABELS).forEach((name) => {
            const field = form.querySelector(`[name="${name}"]:checked`) || form.querySelector(`select[name="${name}"]`);
            const text = field?.tagName === 'SELECT'
                ? field.selectedOptions[0]?.value && field.selectedOptions[0].textContent.trim()
                : field?.closest('label')?.querySelector('span')?.textContent.trim();

            if (text) {
                chips.push(text);
            }
        });

        recap.replaceChildren(...chips.map((text) => {
            const chip = document.createElement('span');
            chip.textContent = text;
            return chip;
        }));

        recap.hidden = chips.length === 0;

    };


    /* ---------- Boutons et clavier ---------- */

    next.addEventListener('click', () => {
        if (stepIsValid()) {
            show(current + 1);
        }
    });

    back.addEventListener('click', () => show(current - 1, { goingBack: true }));

    // Choisir une famille fait passer tout seul à l'étape suivante.
    form.querySelectorAll('input[name="family"]').forEach((radio) => {
        radio.addEventListener('change', () => {
            window.setTimeout(() => show(2), 250);
        });
    });

    // « Entrée » dans un champ fait avancer au lieu d'envoyer trop tôt.
    form.addEventListener('keydown', (event) => {
        if (
            event.key === 'Enter' &&
            current < steps.length &&
            event.target.tagName !== 'TEXTAREA' &&
            event.target.type !== 'submit'
        ) {
            event.preventDefault();
            next.click();
        }
    });

    // Si le navigateur bloque l'envoi sur un champ d'une autre étape, on y retourne.
    form.addEventListener('invalid', (event) => {
        const step = event.target.closest('[data-step]');

        if (step && Number(step.dataset.step) !== current) {
            show(Number(step.dataset.step), { focus: false });
        }
    }, true);


    /* ---------- Nom du fichier joint ---------- */

    const fileInput = form.querySelector('[data-devis-file]');
    const fileName = form.querySelector('[data-devis-file-name]');

    fileInput?.addEventListener('change', () => {
        const file = fileInput.files[0];

        fileName.textContent = file ? file.name : 'Choisir un fichier';
        fileInput.closest('.devis-file')?.classList.toggle('has-file', Boolean(file));
    });


    show(current, { focus: Boolean(form.dataset.startStep) });

};


/* Demande envoyée : on le signale aux outils de mesure (seulement s'ils
   ont été acceptés dans le bandeau cookies, sinon rien n'est chargé). */
export const trackQuoteSent = () => {

    const sent = document.querySelector('[data-quote-sent]:not([hidden])');

    if (sent) {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: 'demande_devis' });
    }

};
