/*
    Animations communes à tout le site (style « ax »).
    Chargé à part par app.js, pour ne pas alourdir le premier affichage.
    Avec « réduire les animations », rien ne bouge et tout reste lisible.

    Ce que ce fichier anime tout seul, sans rien ajouter dans les pages :
    - .ax-flow                      le flux d'air (canvas)
    - .ax-page-hero                 l'arrivée de l'en-tête de page
    - .ax-head h2, .ax-final h2,
      [data-ax-title]               les titres qui montent ligne par ligne
    - [data-ax-words]               un paragraphe qui s'allume mot à mot
    - [data-count]                  les chiffres qui défilent
    - .ax-tile, .ax-steps > li,
      .ax-criteria > div,
      .ax-figures > div,
      [data-ax-fade]                les blocs qui apparaissent en montant
    - .ax-steps                     la ligne qui se remplit
    - .ax-media img,
      .ax-page-hero__media img      la photo qui glisse (parallaxe)
    - .ax-tile                      le halo qui suit la souris
    - .ax-stack .ax-card            les cartes qui s'empilent
    - .ax-marquee                   le bandeau dont la vitesse suit le défilement
    - .ax-final__button             le bouton rond « aimanté »
*/

import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { SplitText } from 'gsap/SplitText';

gsap.registerPlugin(ScrollTrigger, SplitText);

export { gsap, ScrollTrigger, SplitText };


export const finePointer = () =>
    window.matchMedia('(pointer: fine)').matches;

export const reducedMotion = () =>
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;


/* =========================================================
   FLUX D'AIR
   Des filets d'air qui traversent l'écran, du froid (bleu)
   au chaud (orange), en passant par le vert de Split.
   Ils s'écartent autour de la souris.
========================================================= */

const THERMAL = [
    [90, 209, 255],
    [141, 198, 63],
    [255, 138, 61],
];

const thermalColor = (t, alpha) => {
    const scaled = Math.min(Math.max(t, 0), 0.999) * (THERMAL.length - 1);
    const index = Math.floor(scaled);
    const mix = scaled - index;
    const [r1, g1, b1] = THERMAL[index];
    const [r2, g2, b2] = THERMAL[index + 1];

    return `rgba(${Math.round(r1 + (r2 - r1) * mix)}, ${Math.round(g1 + (g2 - g1) * mix)}, ${Math.round(b1 + (b2 - b1) * mix)}, ${alpha})`;
};

const PALETTE = Array.from({ length: 48 }, (_, index) => thermalColor(index / 47, 0.55));


export class AirFlow {

    constructor(canvas) {
        this.canvas = canvas;
        this.context = canvas.getContext('2d');
        this.host = canvas.parentElement;
        this.particles = [];
        this.pointer = { x: -9999, y: -9999 };
        this.running = false;

        this.resize();

        new ResizeObserver(() => this.resize()).observe(this.host);

        new IntersectionObserver(([entry]) => {
            entry.isIntersecting ? this.start() : this.stop();
        }).observe(this.host);

        if (finePointer()) {
            this.host.addEventListener('pointermove', (event) => {
                const box = this.canvas.getBoundingClientRect();
                this.pointer.x = event.clientX - box.left;
                this.pointer.y = event.clientY - box.top;
            });

            this.host.addEventListener('pointerleave', () => {
                this.pointer.x = -9999;
                this.pointer.y = -9999;
            });
        }
    }

    resize() {
        const ratio = Math.min(window.devicePixelRatio || 1, 1.5);

        this.width = this.canvas.clientWidth;
        this.height = this.canvas.clientHeight;

        this.canvas.width = Math.round(this.width * ratio);
        this.canvas.height = Math.round(this.height * ratio);
        this.context.setTransform(ratio, 0, 0, ratio, 0, 0);

        const count = Math.min(Math.round((this.width * this.height) / 2300), 720);

        this.particles = Array.from({ length: count }, () => this.spawn(true));
    }

    spawn(anywhere = false) {
        return {
            x: anywhere ? Math.random() * this.width : -20 - Math.random() * 80,
            y: Math.random() * this.height,
            speed: 0.8 + Math.random() * 1.8,
            width: 0.6 + Math.random() * 1.4,
            age: 0,
            life: 160 + Math.random() * 260,
        };
    }

    step(time) {
        const { context: ctx, width, height, pointer } = this;

        // Les traînées s'effacent doucement : l'air laisse un sillage.
        ctx.globalCompositeOperation = 'destination-out';
        ctx.fillStyle = 'rgba(0, 0, 0, 0.075)';
        ctx.fillRect(0, 0, width, height);

        ctx.globalCompositeOperation = 'lighter';
        ctx.lineCap = 'round';

        const t = time * 0.00022;

        for (const particle of this.particles) {
            let angle =
                Math.sin(particle.y * 0.0052 + t * 2.1) * 0.55 +
                Math.sin(particle.x * 0.0026 - t * 1.4) * 0.45 +
                Math.cos((particle.x + particle.y) * 0.0017 + t) * 0.25;

            let speed = particle.speed;

            const dx = particle.x - pointer.x;
            const dy = particle.y - pointer.y;
            const distance = Math.hypot(dx, dy);

            if (distance < 180) {
                const force = 1 - distance / 180;
                angle += Math.atan2(dy, dx) * force * 0.9;
                speed += force * 3.2;
            }

            const nextX = particle.x + Math.cos(angle) * speed;
            const nextY = particle.y + Math.sin(angle) * speed;

            const fade = Math.min(particle.age / 30, 1, (particle.life - particle.age) / 40);

            ctx.globalAlpha = Math.max(fade, 0);
            ctx.strokeStyle = PALETTE[Math.floor(Math.min(Math.max(nextX / width, 0), 0.999) * PALETTE.length)];
            ctx.lineWidth = particle.width;
            ctx.beginPath();
            ctx.moveTo(particle.x, particle.y);
            ctx.lineTo(nextX, nextY);
            ctx.stroke();

            particle.x = nextX;
            particle.y = nextY;
            particle.age += 1;

            if (
                particle.age > particle.life ||
                particle.x > width + 20 ||
                particle.y < -20 ||
                particle.y > height + 20
            ) {
                Object.assign(particle, this.spawn(Math.random() < 0.35));
            }
        }

        ctx.globalAlpha = 1;
    }

    start() {
        if (this.running) {
            return;
        }

        this.running = true;

        const loop = (time) => {
            if (!this.running) {
                return;
            }

            this.step(time);
            this.frame = requestAnimationFrame(loop);
        };

        this.frame = requestAnimationFrame(loop);
    }

    stop() {
        this.running = false;
        cancelAnimationFrame(this.frame);
    }

}


/* =========================================================
   BARRE DE PROGRESSION DE LECTURE
========================================================= */

const readingProgress = () => {

    const bar = document.createElement('div');

    bar.className = 'scroll-progress';
    bar.setAttribute('aria-hidden', 'true');

    document.body.append(bar);

    gsap.to(bar, {
        scaleX: 1,
        ease: 'none',
        scrollTrigger: { start: 0, end: 'max', scrub: 0.3 },
    });

};


/* =========================================================
   EN-TÊTE DE PAGE
========================================================= */

const pageHero = () => {

    const hero = document.querySelector('.ax-page-hero');

    if (!hero) {
        return;
    }

    const title = hero.querySelector('.ax-page-hero__title');
    const media = hero.querySelector('.ax-page-hero__media');

    const timeline = gsap.timeline({ defaults: { ease: 'power4.out' } });

    timeline.from(hero.querySelector('.ax-page-hero__glow'), { opacity: 0, duration: 2 }, 0);

    timeline.from(hero.querySelectorAll('.ax-crumbs, .ax-eyebrow'), {
        opacity: 0,
        y: 20,
        stagger: 0.1,
        duration: 0.8,
    }, 0.05);

    if (title) {
        const split = SplitText.create(title, { type: 'words, chars', mask: 'chars' });

        timeline.from(split.chars, {
            yPercent: 120,
            rotate: 6,
            duration: 1.1,
            stagger: 0.018,
            onComplete: () => split.revert(),
        }, 0.15);
    }

    timeline.from(hero.querySelectorAll('.ax-page-hero__lead, .ax-page-hero__actions, .ax-chips li'), {
        opacity: 0,
        y: 26,
        stagger: 0.08,
        duration: 0.9,
    }, 0.7);

    if (media) {
        timeline
            .from(media, { clipPath: 'inset(100% 0% 0% 0% round 28px)', duration: 1.4, ease: 'power4.inOut', clearProps: 'clipPath' }, 0.2)
            .from(media.querySelectorAll('figcaption, .ax-badge'), { opacity: 0, y: 20, stagger: 0.12, duration: 0.8 }, 1.1);
    }

};


/* =========================================================
   TITRES ET TEXTES
========================================================= */

const headings = () => {

    document
        .querySelectorAll('.ax-head h2, .ax-final h2, .ax-split h2, [data-ax-title]')
        .forEach((heading) => {

            SplitText.create(heading, {
                type: 'lines',
                mask: 'lines',
                autoSplit: true,
                onSplit: (split) => gsap.from(split.lines, {
                    yPercent: 115,
                    duration: 1.2,
                    stagger: 0.12,
                    ease: 'power4.out',
                    scrollTrigger: { trigger: heading, start: 'top 85%', once: true },
                }),
            });

        });

};


const words = () => {

    document.querySelectorAll('[data-ax-words]').forEach((paragraph) => {

        SplitText.create(paragraph, {
            type: 'words',
            autoSplit: true,
            onSplit: (split) => gsap.fromTo(split.words,
                { opacity: 0.14 },
                {
                    opacity: 1,
                    stagger: 0.1,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: paragraph,
                        start: 'top 78%',
                        end: 'bottom 45%',
                        scrub: true,
                    },
                }),
        });

    });

};


/* =========================================================
   CHIFFRES QUI DÉFILENT
========================================================= */

const counters = () => {

    document.querySelectorAll('[data-count]').forEach((number) => {

        const value = { current: Number(number.dataset.countFrom ?? 0) };

        number.textContent = value.current;

        gsap.to(value, {
            current: Number(number.dataset.count),
            duration: 2,
            ease: 'power3.out',
            scrollTrigger: { trigger: number, start: 'top 90%', once: true },
            onUpdate: () => {
                number.textContent = Math.round(value.current);
            },
        });

    });

};


/* =========================================================
   BLOCS QUI APPARAISSENT EN MONTANT
========================================================= */

const fades = () => {

    const selector = '.ax-tile, .ax-steps > li, .ax-criteria > div, .ax-figures > div, .ax-prose > *, .ax-cee, [data-ax-fade]';

    gsap.set(selector, { opacity: 0, y: 50 });

    ScrollTrigger.batch(selector, {
        start: 'top 90%',
        once: true,
        onEnter: (batch) => gsap.to(batch, {
            opacity: 1,
            y: 0,
            stagger: 0.09,
            duration: 1,
            ease: 'power3.out',
            overwrite: true,
        }),
    });

};


/* =========================================================
   ÉTAPES : la ligne se remplit au défilement
========================================================= */

const steps = () => {

    document.querySelectorAll('.ax-steps').forEach((list) => {

        gsap.fromTo(list, { '--ax-progress': 0 }, {
            '--ax-progress': 1,
            ease: 'none',
            scrollTrigger: {
                trigger: list,
                start: 'top 80%',
                end: 'bottom 55%',
                scrub: 0.6,
            },
        });

    });

};


/* =========================================================
   PHOTOS QUI GLISSENT (parallaxe)
========================================================= */

const parallax = () => {

    document.querySelectorAll('.ax-media img, .ax-page-hero__media img').forEach((image) => {

        gsap.fromTo(image, { yPercent: -6 }, {
            yPercent: 6,
            ease: 'none',
            scrollTrigger: {
                trigger: image.parentElement,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            },
        });

    });

};


/* =========================================================
   CARTES : halo qui suit la souris
========================================================= */

const spotlight = () => {

    if (!finePointer()) {
        return;
    }

    document.querySelectorAll('.ax-tile').forEach((tile) => {

        tile.addEventListener('pointermove', (event) => {
            const box = tile.getBoundingClientRect();

            tile.style.setProperty('--mx', `${event.clientX - box.left}px`);
            tile.style.setProperty('--my', `${event.clientY - box.top}px`);
        });

    });

};


/* =========================================================
   CARTES QUI S'EMPILENT : celle du dessous recule
========================================================= */

const stack = () => {

    document.querySelectorAll('.ax-stack').forEach((list) => {

        const cards = gsap.utils.toArray(list.querySelectorAll('.ax-card'));

        cards.forEach((card, index) => {

            const next = cards[index + 1];

            if (!next) {
                return;
            }

            const trigger = { trigger: next, start: 'top bottom', end: 'top 30%', scrub: true };

            gsap.to(card, { scale: 0.92 + index * 0.015, ease: 'none', scrollTrigger: trigger });

            const veil = card.querySelector('.ax-card__veil');

            if (veil) {
                gsap.to(veil, { opacity: 0.45, ease: 'none', scrollTrigger: trigger });
            }

        });

    });

};


/* =========================================================
   BANDEAU : sa vitesse suit celle du défilement
========================================================= */

const marquee = () => {

    document.querySelectorAll('.ax-marquee').forEach((band) => {

        const animation = band.querySelector('.ax-marquee__track')?.getAnimations()[0];

        if (!animation) {
            return;
        }

        const rate = { value: 1 };

        ScrollTrigger.create({
            trigger: band,
            start: 'top bottom',
            end: 'bottom top',
            onUpdate: (self) => {
                const boost = 1 + Math.min(Math.abs(self.getVelocity()) / 280, 7);
                const direction = self.direction === -1 ? -1 : 1;

                rate.value = boost * direction;
                animation.playbackRate = rate.value;

                gsap.to(rate, {
                    value: direction,
                    duration: 0.9,
                    ease: 'power2.out',
                    overwrite: true,
                    onUpdate: () => {
                        animation.playbackRate = rate.value;
                    },
                });
            },
        });

    });

};


/* =========================================================
   APPEL FINAL : bouton rond aimanté
========================================================= */

const magneticButtons = () => {

    document.querySelectorAll('.ax-final__button').forEach((button) => {

        gsap.from(button, {
            scale: 0,
            rotate: -90,
            duration: 1.2,
            ease: 'back.out(1.6)',
            scrollTrigger: { trigger: button, start: 'top 92%', once: true },
        });

        if (!finePointer()) {
            return;
        }

        const moveX = gsap.quickTo(button, 'x', { duration: 0.5, ease: 'power3' });
        const moveY = gsap.quickTo(button, 'y', { duration: 0.5, ease: 'power3' });

        const zone = button.parentElement;

        zone.addEventListener('pointermove', (event) => {
            const box = button.getBoundingClientRect();

            moveX((event.clientX - (box.left + box.width / 2)) * 0.35);
            moveY((event.clientY - (box.top + box.height / 2)) * 0.35);
        });

        zone.addEventListener('pointerleave', () => {
            gsap.to(button, { x: 0, y: 0, duration: 1, ease: 'elastic.out(1, 0.35)' });
        });

    });

};


/* =========================================================
   LANCEMENT
   Renvoie une promesse résolue quand les textes sont prêts,
   ou false si l'utilisateur a demandé moins d'animations.
========================================================= */

export const initShared = () => {

    if (reducedMotion()) {
        return false;
    }

    document.querySelectorAll('.ax-flow').forEach((canvas) => new AirFlow(canvas));

    readingProgress();
    fades();
    steps();
    parallax();
    spotlight();
    stack();
    marquee();
    magneticButtons();
    counters();

    return document.fonts.ready.then(() => {
        pageHero();
        headings();
        words();

        ScrollTrigger.refresh();
    });

};
