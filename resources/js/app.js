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
                y: 20,
                duration: 0.7
            }
        )

        .from(
            '.home-hero__title',
            {
                opacity: 0,
                y: 45,
                duration: 1
            },
            '-=0.35'
        )

        .from(
            [
                '.home-hero__intro',
                '.home-hero__actions',
                '.home-hero__trust'
            ],
            {
                opacity: 0,
                y: 25,
                stagger: 0.12,
                duration: 0.7
            },
            '-=0.5'
        )

        .from(
            '.home-hero__visual',
            {
                opacity: 0,
                x: 50,
                duration: 1.1
            },
            '-=0.9'
        );

}