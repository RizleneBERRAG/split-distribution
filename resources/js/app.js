import './cookie-consent';


const header = document.querySelector('#site-header');

const mobileMenuButton =
    document.querySelector('#mobile-menu-button');

const mobileMenu =
    document.querySelector('#mobile-menu');

let mobileMenuReturnFocus = null;

const mobileMenuFocusable = () =>
    mobileMenu?.querySelectorAll('a[href], button:not([disabled])') ?? [];

const closeMobileMenu = () => {

    mobileMenu?.classList.remove('is-open');
    mobileMenu?.setAttribute('aria-hidden', 'true');

    mobileMenuButton?.setAttribute('aria-expanded', 'false');
    mobileMenuButton?.setAttribute('aria-label', 'Ouvrir le menu');

    document.body.classList.remove('menu-open');

};


const openMobileMenu = () => {

    mobileMenuReturnFocus = document.activeElement;

    mobileMenu?.classList.add('is-open');
    mobileMenu?.setAttribute('aria-hidden', 'false');

    mobileMenuButton?.setAttribute('aria-expanded', 'true');
    mobileMenuButton?.setAttribute('aria-label', 'Fermer le menu');

    document.body.classList.add('menu-open');

    window.requestAnimationFrame(() => {
        mobileMenuFocusable()[0]?.focus();
    });

};


const updateHeader = () => {

    if (!header) {
        return;
    }

    const scrollY = window.scrollY;

    header.classList.toggle(
        'is-scrolled',
        scrollY > 30
    );

    // La barre se cache quand on descend et revient dès qu'on remonte.
    const menuIsOpen = mobileMenu?.classList.contains('is-open');

    if (scrollY > lastScrollY + 6 && scrollY > 240 && !menuIsOpen) {
        header.classList.add('is-hidden');
    } else if (scrollY < lastScrollY - 6 || scrollY <= 240 || menuIsOpen) {
        header.classList.remove('is-hidden');
    }

    lastScrollY = scrollY;

};


let lastScrollY = window.scrollY;

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

    const isMenuOpen = mobileMenu?.classList.contains('is-open');

    if (!isMenuOpen) {
        return;
    }


    if (event.key === 'Tab') {

        const focusable = [mobileMenuButton, ...mobileMenuFocusable()]
            .filter(Boolean);

        const firstFocusable = focusable[0];
        const lastFocusable = focusable[focusable.length - 1];

        if (event.shiftKey && document.activeElement === firstFocusable) {
            event.preventDefault();
            lastFocusable?.focus();
        } else if (!event.shiftKey && document.activeElement === lastFocusable) {
            event.preventDefault();
            firstFocusable?.focus();
        }

        return;
    }


    if (event.key !== 'Escape') {
        return;
    }

    closeMobileMenu();

    mobileMenuReturnFocus?.focus();

});


window.addEventListener('resize', () => {

    if (window.innerWidth > 1100) {
        closeMobileMenu();
    }

});


window.addEventListener('pageshow', () => {
    closeMobileMenu();
});


/* =========================================================
   NAVIGATION : surlignage qui glisse d'un lien à l'autre
========================================================= */

const siteNav = document.querySelector('.site-nav');
const navIndicator = siteNav?.querySelector('.site-nav__indicator');

if (siteNav && navIndicator) {

    const navLinks = [...siteNav.querySelectorAll('.site-nav__link')];
    const activeLink = navLinks.find((link) => link.classList.contains('is-active'));

    const moveIndicator = (link) => {

        if (!link) {
            navIndicator.style.opacity = '0';
            return;
        }

        const navBox = siteNav.getBoundingClientRect();
        const linkBox = link.getBoundingClientRect();

        navIndicator.style.width = `${linkBox.width}px`;
        navIndicator.style.transform = `translateX(${linkBox.left - navBox.left}px)`;
        navIndicator.style.opacity = '1';

    };

    const placeIndicator = () => {
        navIndicator.style.transition = 'none';
        moveIndicator(activeLink);
        navIndicator.getBoundingClientRect();
        navIndicator.style.transition = '';
    };

    navLinks.forEach((link) => {
        link.addEventListener('pointerenter', () => moveIndicator(link));
        link.addEventListener('focus', () => moveIndicator(link));
    });

    siteNav.addEventListener('pointerleave', () => moveIndicator(activeLink));

    siteNav.addEventListener('focusout', (event) => {
        if (!siteNav.contains(event.relatedTarget)) {
            moveIndicator(activeLink);
        }
    });

    placeIndicator();
    document.fonts?.ready.then(placeIndicator);
    window.addEventListener('resize', placeIndicator);

}


/* =========================================================
   GRAND MENU « SOLUTIONS » : Échap le referme
========================================================= */

const megaItem = document.querySelector('.site-nav__item--mega');

if (megaItem) {

    megaItem.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            megaItem.classList.add('is-dismissed');
            megaItem.querySelector('.site-nav__link')?.focus();
        }
    });

    megaItem.addEventListener('pointerleave', () => {
        megaItem.classList.remove('is-dismissed');
    });

    megaItem.addEventListener('focusout', (event) => {
        if (!megaItem.contains(event.relatedTarget)) {
            megaItem.classList.remove('is-dismissed');
        }
    });

}


const staticContactSuccess =
    document.querySelector('[data-static-contact-success]');

if (
    staticContactSuccess &&
    new URLSearchParams(window.location.search).get('sent') === '1'
) {
    staticContactSuccess.hidden = false;
}


// Animations chargées à part, pour ne pas alourdir le premier affichage.
if (document.body.classList.contains('page-home')) {
    import('./accueil').then(({ initAccueil }) => initAccueil());
} else {
    import('./ax').then(({ initShared }) => initShared());
}
