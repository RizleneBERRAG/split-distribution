<header class="site-header" id="site-header">

    <div class="site-header__container">

        <a
            href="{{ route('home') }}"
            class="site-brand"
            aria-label="Split Distribution - Accueil"
        >
            <div class="site-brand__icon">
                <img
                    src="{{ asset('images/brand/chameleon-temp.png') }}"
                    alt=""
                >
            </div>

            <div class="site-brand__text">
                <strong>Split</strong>
                <span>Distribution</span>
            </div>
        </a>


        <nav class="site-nav" aria-label="Navigation principale">

            <a
                href="{{ route('home') }}"
                @class([
                    'site-nav__link',
                    'is-active' => request()->routeIs('home')
                ])
            >
                Accueil
            </a>

            <a
                href="{{ route('solutions.index') }}"
                @class([
                    'site-nav__link',
                    'is-active' => request()->routeIs('solutions.*')
                ])
            >
                Solutions
            </a>

            <a
                href="{{ route('services') }}"
                @class([
                    'site-nav__link',
                    'is-active' => request()->routeIs('services')
                ])
            >
                Services
            </a>

            <a
                href="{{ route('marques') }}"
                @class([
                    'site-nav__link',
                    'is-active' => request()->routeIs('marques')
                ])
            >
                Marques
            </a>

            <a
                href="{{ route('entreprise') }}"
                @class([
                    'site-nav__link',
                    'is-active' => request()->routeIs('entreprise')
                ])
            >
                L'entreprise
            </a>

        </nav>


        <div class="site-header__actions">

            <a
                href="tel:+33472230140"
                class="site-header__phone"
            >
                04 72 23 01 40
            </a>

            <a
                href="{{ route('contact') }}"
                class="button button--primary"
            >
                Nous contacter
                <span>↗</span>
            </a>

        </div>


        <button
            type="button"
            class="mobile-menu-button"
            id="mobile-menu-button"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <span></span>
            <span></span>
        </button>

    </div>


    <nav
        class="mobile-menu"
        id="mobile-menu"
        aria-label="Navigation mobile"
        aria-hidden="true"
    >

        <a href="{{ route('home') }}">
            Accueil
        </a>

        <a href="{{ route('solutions.index') }}">
            Solutions
        </a>

        <a href="{{ route('services') }}">
            Services
        </a>

        <a href="{{ route('marques') }}">
            Marques
        </a>

        <a href="{{ route('entreprise') }}">
            L'entreprise
        </a>

        <a href="{{ route('contact') }}">
            Contact
        </a>

    </nav>

</header>
