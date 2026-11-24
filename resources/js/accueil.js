/*
    Accueil : ce qui lui est propre.
    Le reste (flux d'air, titres, cartes, appel final…) vient de ax.js.
*/

import { gsap, ScrollTrigger, SplitText, finePointer, initShared } from './ax';


const DESKTOP = '(min-width: 1024px)';


/* =========================================================
   HERO : arrivée de la page
========================================================= */

const heroIntro = () => {

    const lines = SplitText.create('.ax-hero__title .ax-line', {
        type: 'words, chars',
        mask: 'chars',
    });

    gsap.timeline({ defaults: { ease: 'power4.out' } })

        .from('.ax-hero__glow', { opacity: 0, duration: 2 }, 0)

        .from('.ax-hero .ax-eyebrow', { opacity: 0, y: 20, duration: 0.8 }, 0.1)

        .from(lines.chars, {
            yPercent: 120,
            rotate: 6,
            duration: 1.1,
            stagger: 0.022,
            onComplete: () => lines.revert(),
        }, 0.2)

        .from('.ax-hero__bottom > *', { opacity: 0, y: 26, stagger: 0.12, duration: 0.9 }, 0.9)

        .from('.ax-hero__window', { opacity: 0, duration: 1.4, ease: 'power2.out' }, 0.4)

        .from('.ax-hero__window img', { scale: 1.45, duration: 2.2, ease: 'power3.out' }, 0.4)

        // On anime l'intérieur de l'indicateur : son conteneur est réservé au masquage au défilement.
        .from('.ax-hero__scroll > *', { opacity: 0, y: 10, stagger: 0.1, duration: 0.8 }, 1.4);

};


/* =========================================================
   « FAITES DÉFILER » disparaît dès qu'on commence à descendre
========================================================= */

const scrollCue = () => {

    const hero = document.querySelector('.ax-hero');

    if (!hero) {
        return;
    }

    ScrollTrigger.create({
        start: 24,
        end: 'max',
        onToggle: (self) => hero.classList.toggle('has-scrolled', self.isActive),
    });

};


/* =========================================================
   HERO : la fenêtre photo s'ouvre en plein écran (ordinateur)
========================================================= */

const heroScene = (media) => {

    media.add(DESKTOP, () => {

        const windowInset = () => {
            const header = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--header-height')) || 88;
            const vw = window.innerWidth / 100;
            const vh = window.innerHeight / 100;

            return `inset(${header + 8 * vh}px ${4 * vw}px ${12 * vh}px ${64 * vw}px round 28px)`;
        };

        gsap.timeline({
            scrollTrigger: {
                trigger: '.ax-hero',
                start: 'top top',
                end: '+=150%',
                pin: true,
                refreshPriority: 2,
                scrub: 1,
                invalidateOnRefresh: true,
            },
        })
            .to('.ax-hero__inner', { yPercent: -18, opacity: 0, ease: 'power2.in', duration: 0.45 }, 0)

            .fromTo('.ax-hero__window',
                { clipPath: windowInset },
                { clipPath: 'inset(0px 0px 0px 0px round 0px)', ease: 'power2.inOut', duration: 0.7 },
                0)

            .fromTo('.ax-hero__window img',
                { scale: 1.18 },
                { scale: 1, ease: 'power1.inOut', duration: 0.9, immediateRender: false },
                0)

            .to('.ax-hero__shade', { opacity: 1, duration: 0.4 }, 0.45)

            .to('.ax-hero__caption', { opacity: 1, duration: 0.2 }, 0.6)

            .from('.ax-hero__caption p', { y: 80, duration: 0.35, ease: 'power3.out' }, 0.6)

            .from('.ax-hero__tags li', { y: 40, opacity: 0, stagger: 0.06, duration: 0.3 }, 0.72);

    });

};


/* =========================================================
   SOLUTIONS : galerie horizontale (ordinateur)
========================================================= */

const solutions = (media) => {

    const section = document.querySelector('.ax-solutions');
    const viewport = document.querySelector('.ax-solutions__viewport');
    const track = document.querySelector('.ax-solutions__track');
    const progress = document.querySelector('.ax-solutions__progress span');

    if (!section || !viewport || !track) {
        return;
    }

    media.add(DESKTOP, () => {

        section.classList.add('is-pinned');

        const distance = () => track.scrollWidth - window.innerWidth;

        const slide = gsap.to(track, {
            x: () => -distance(),
            ease: 'none',
            scrollTrigger: {
                trigger: section,
                start: 'top top',
                end: () => `+=${distance()}`,
                pin: true,
                refreshPriority: 1,
                scrub: 1,
                invalidateOnRefresh: true,
                onUpdate: (self) => {
                    gsap.set(progress, { scaleX: 0.16 + self.progress * 0.84 });
                },
            },
        });

        gsap.utils.toArray('.ax-panel').forEach((panel) => {

            gsap.fromTo(panel.querySelector('.ax-panel__media'),
                { xPercent: 7 },
                {
                    xPercent: -7,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: panel,
                        containerAnimation: slide,
                        start: 'left right',
                        end: 'right left',
                        scrub: true,
                    },
                });

        });

        return () => section.classList.remove('is-pinned');

    });

    gsap.from('.ax-panel', {
        opacity: 0,
        y: 90,
        stagger: 0.08,
        duration: 1.2,
        ease: 'power4.out',
        scrollTrigger: { trigger: viewport, start: 'top 88%', once: true },
    });

};


/* =========================================================
   BULLE « VOIR » SUR LES SOLUTIONS
========================================================= */

const cursorBubble = () => {

    if (!finePointer()) {
        return;
    }

    const bubble = document.createElement('div');

    bubble.className = 'ax-cursor';
    bubble.setAttribute('aria-hidden', 'true');
    bubble.textContent = 'Voir ↗';

    document.body.append(bubble);

    const moveX = gsap.quickTo(bubble, 'x', { duration: 0.45, ease: 'power3' });
    const moveY = gsap.quickTo(bubble, 'y', { duration: 0.45, ease: 'power3' });

    window.addEventListener('pointermove', (event) => {
        moveX(event.clientX);
        moveY(event.clientY);
    });

    document.querySelectorAll('.ax-panel').forEach((panel) => {

        panel.addEventListener('pointerenter', () => {
            gsap.to(bubble, { scale: 1, duration: 0.4, ease: 'back.out(2)' });
        });

        panel.addEventListener('pointerleave', () => {
            gsap.to(bubble, { scale: 0, duration: 0.3, ease: 'power3.in' });
        });

    });

};


export const initAccueil = () => {

    const shared = initShared();

    if (!shared) {
        return;
    }

    const media = gsap.matchMedia();

    cursorBubble();

    shared.then(() => {
        heroIntro();
        scrollCue();
        heroScene(media);
        solutions(media);

        ScrollTrigger.refresh();
    });

};
