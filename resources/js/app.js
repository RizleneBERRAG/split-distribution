import { gsap } from 'gsap';


const header = document.querySelector('#site-header');

const mobileMenuButton =
    document.querySelector('#mobile-menu-button');

const mobileMenu =
    document.querySelector('#mobile-menu');

const closeMobileMenu = () => {

    mobileMenu?.classList.remove('is-open');
    mobileMenu?.setAttribute('aria-hidden', 'true');

    mobileMenuButton?.setAttribute('aria-expanded', 'false');
    mobileMenuButton?.setAttribute('aria-label', 'Ouvrir le menu');

};


const openMobileMenu = () => {

    mobileMenu?.classList.add('is-open');
    mobileMenu?.setAttribute('aria-hidden', 'false');

    mobileMenuButton?.setAttribute('aria-expanded', 'true');
    mobileMenuButton?.setAttribute('aria-label', 'Fermer le menu');

};


const updateHeader = () => {

    if (!header) {
        return;
    }

    header.classList.toggle(
        'is-scrolled',
        window.scrollY > 30
    );

};


updateHeader();

window.addEventListener(
    'scroll',
    updateHeader,
    {
        passive: true
    }
);


mobileMenuButton?.addEventListener(
    'click',
    () => {

        if (mobileMenu?.classList.contains('is-open')) {
            closeMobileMenu();

            return;
        }

        openMobileMenu();

    }
);


mobileMenu?.querySelectorAll('a').forEach((link) => {

    link.addEventListener('click', closeMobileMenu);

});


document.addEventListener('keydown', (event) => {

    if (event.key !== 'Escape') {
        return;
    }

    const wasOpen = mobileMenu?.classList.contains('is-open');

    closeMobileMenu();

    if (wasOpen) {
        mobileMenuButton?.focus();
    }

});


window.addEventListener('resize', () => {

    if (window.innerWidth > 1100) {
        closeMobileMenu();
    }

});


if (
    document.body.classList.contains('page-home')
) {

    /* =========================================================
       HERO CVC
       ---------------------------------------------------------
       Les cartouches restent indépendants du visuel de fond.
    ========================================================= */

    const hero =
        document.querySelector('.home-hero');


    if (
        hero &&
        !hero.querySelector('.home-hero__systems')
    ) {

        hero.insertAdjacentHTML(
            'beforeend',
            `
                <div
                    class="home-hero__systems"
                    aria-label="Solutions CVC présentées"
                >

                    <article
                        class="hero-system-card hero-system-card--clim"
                    >
                        <div
                            class="hero-system-card__icon hero-system-card__icon--clim"
                            aria-hidden="true"
                        ></div>

                        <div class="hero-system-card__copy">
                            <strong>
                                Climatisation
                            </strong>

                            <span>
                                Mono / Multi-split
                            </span>
                        </div>
                    </article>


                    <span
                        class="hero-system-line hero-system-line--clim"
                        aria-hidden="true"
                    ></span>

                    <span
                        class="hero-system-hotspot hero-system-hotspot--clim"
                        aria-hidden="true"
                    ></span>


                    <article
                        class="hero-system-card hero-system-card--vent"
                    >
                        <div
                            class="hero-system-card__icon hero-system-card__icon--vent"
                            aria-hidden="true"
                        ></div>

                        <div class="hero-system-card__copy">
                            <strong>
                                Ventilation
                            </strong>

                            <span>
                                VMC / CTA
                            </span>
                        </div>
                    </article>


                    <span
                        class="hero-system-line hero-system-line--vent"
                        aria-hidden="true"
                    ></span>

                    <span
                        class="hero-system-hotspot hero-system-hotspot--vent"
                        aria-hidden="true"
                    ></span>


                    <article
                        class="hero-system-card hero-system-card--pac"
                    >
                        <div
                            class="hero-system-card__icon hero-system-card__icon--pac"
                            aria-hidden="true"
                        ></div>

                        <div class="hero-system-card__copy">
                            <strong>
                                Pompes à chaleur
                            </strong>

                            <span>
                                Air / Air · Air / Eau
                            </span>
                        </div>
                    </article>


                    <span
                        class="hero-system-line hero-system-line--pac"
                        aria-hidden="true"
                    ></span>

                    <span
                        class="hero-system-hotspot hero-system-hotspot--pac"
                        aria-hidden="true"
                    ></span>

                </div>
            `
        );

    }


    const reducedMotion =
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!reducedMotion) {

        const timeline = gsap.timeline({
            defaults: {
                ease: 'power3.out'
            }
        });

        timeline
            .from(
                '.home-hero__eyebrow',
                {
                    opacity: 0,
                    y: 18,
                    duration: 0.7
                }
            )

            .from(
                '.home-hero__title',
                {
                    opacity: 0,
                    y: 42,
                    duration: 0.95
                },
                '-=0.35'
            )

            .from(
                [
                    '.home-hero__description',
                    '.home-hero__actions'
                ],
                {
                    opacity: 0,
                    y: 22,
                    stagger: 0.12,
                    duration: 0.7
                },
                '-=0.5'
            )

            .from(
                '.hero-system-card',
                {
                    opacity: 0,
                    y: 16,
                    scale: 0.985,
                    stagger: 0.10,
                    duration: 0.65
                },
                '-=0.75'
            )

            .from(
                [
                    '.hero-system-line',
                    '.hero-system-hotspot'
                ],
                {
                    opacity: 0,
                    stagger: 0.05,
                    duration: 0.4
                },
                '-=0.45'
            )

            .from(
                '.home-trust__item',
                {
                    opacity: 0,
                    y: 14,
                    stagger: 0.08,
                    duration: 0.5
                },
                '-=0.35'
            );

    }
}
