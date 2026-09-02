import './bootstrap';

import { gsap } from 'gsap';


const header = document.querySelector('#site-header');

const mobileMenuButton =
    document.querySelector('#mobile-menu-button');

const mobileMenu =
    document.querySelector('#mobile-menu');


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

        const isOpen =
            mobileMenu.classList.toggle('is-open');

        mobileMenuButton.setAttribute(
            'aria-expanded',
            String(isOpen)
        );

    }
);


if (
    document.body.classList.contains('page-home')
) {

    /*
        Le hero V2 reste isolé dans son propre fichier CSS.
        Il n'est chargé que sur la page d'accueil.
    */
    void import('../css/pages/home-hero-v2.css');


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
            '.home-hero__background',
            {
                opacity: 0,
                x: 36,
                duration: 1.15
            },
            '-=0.95'
        )

        .from(
            '.home-trust__item',
            {
                opacity: 0,
                y: 14,
                stagger: 0.08,
                duration: 0.5
            },
            '-=0.45'
        );

}
