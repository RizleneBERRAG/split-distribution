@php
    // Le grand menu « Solutions » (ordinateur) et ses raccourcis (téléphone).
    $menuSolutions = [
        ['route' => 'solutions.climatisation', 'image' => 'images/home/climatisation.webp', 'eyebrow' => 'Confort thermique', 'title' => 'Climatisation'],
        ['route' => 'solutions.pompes-a-chaleur', 'image' => 'images/home/pac.webp', 'eyebrow' => 'Chauffage', 'title' => 'Pompes à chaleur'],
        ['route' => 'solutions.ventilation', 'image' => 'images/home/ventilation.webp', 'eyebrow' => 'Qualité de l’air', 'title' => 'Ventilation'],
        ['route' => 'solutions.tertiaire', 'image' => 'images/home/tertiaire.webp', 'eyebrow' => 'Solutions techniques', 'title' => 'Tertiaire'],
        ['route' => 'solutions.energies-renouvelables', 'image' => 'images/home/energies.webp', 'eyebrow' => 'Énergie', 'title' => 'Énergies'],
        ['route' => 'solutions.accessoires', 'image' => 'images/home/accessoires.webp', 'eyebrow' => 'Installation', 'title' => 'Accessoires'],
    ];

    $menuLinks = [
        ['route' => 'home', 'active' => 'home', 'label' => 'Accueil'],
        ['route' => 'solutions.index', 'active' => 'solutions.*', 'label' => 'Solutions'],
        ['route' => 'services', 'active' => 'services', 'label' => 'Services'],
        ['route' => 'entreprise', 'active' => 'entreprise', 'label' => 'L’entreprise'],
    ];
@endphp

<header class="site-header" id="site-header">

    {{-- =========================================================
        LA BARRE FLOTTANTE
    ========================================================== --}}

    <div class="site-header__bar">

        <a href="{{ route('home') }}" class="site-brand" aria-label="Split Distribution - Accueil">
            <span class="site-brand__mark" aria-hidden="true">
                <img
                    src="{{ asset('images/brand/chameleon-mark.png') }}"
                    alt=""
                    width="294"
                    height="254"
                >
            </span>

            <span class="site-brand__text">
                <strong>Split</strong>
                <span>Distribution</span>
            </span>
        </a>


        <nav class="site-nav" aria-label="Navigation principale">

            <span class="site-nav__indicator" aria-hidden="true"></span>

            @foreach ($menuLinks as $link)
                @php($isActive = request()->routeIs($link['active']))

                @if ($link['route'] === 'solutions.index')
                    <div class="site-nav__item site-nav__item--mega">
                        <a
                            href="{{ route($link['route']) }}"
                            @class(['site-nav__link', 'is-active' => $isActive])
                            @if ($isActive) aria-current="page" @endif
                        >
                            {{ $link['label'] }}
                            <svg class="site-nav__chevron" viewBox="0 0 12 12" aria-hidden="true">
                                <path d="M2.5 4.5 6 8l3.5-3.5" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <div class="site-mega" aria-label="Nos solutions">
                            <ul class="site-mega__grid">
                                @foreach ($menuSolutions as $solution)
                                    <li style="--i: {{ $loop->index }}">
                                        <a
                                            href="{{ route($solution['route']) }}"
                                            @class(['site-mega__card', 'is-active' => request()->routeIs($solution['route'])])
                                        >
                                            <span class="site-mega__thumb">
                                                <img src="{{ asset($solution['image']) }}" alt="" loading="lazy" decoding="async">
                                            </span>

                                            <span class="site-mega__copy">
                                                <small>{{ $solution['eyebrow'] }}</small>
                                                <strong>{{ $solution['title'] }}</strong>
                                            </span>

                                            <span class="site-mega__arrow" aria-hidden="true">↗</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="site-mega__foot">
                                <span>Six familles de solutions, adaptées à chaque projet.</span>

                                <a href="{{ route('solutions.index') }}">
                                    Voir toutes les solutions <span aria-hidden="true">↗</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <a
                        href="{{ route($link['route']) }}"
                        @class(['site-nav__link', 'is-active' => $isActive])
                        @if ($isActive) aria-current="page" @endif
                    >
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach

        </nav>


        <div class="site-header__actions">

            <a href="tel:+33472230140" class="site-header__phone">
                <span class="site-header__phone-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M6.6 3.5h2.6l1.4 4-2 1.3a11.5 11.5 0 0 0 6.6 6.6l1.3-2 4 1.4v2.6a2 2 0 0 1-2.2 2A16.5 16.5 0 0 1 4.6 5.7a2 2 0 0 1 2-2.2Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                    </svg>
                </span>
                04 72 23 01 40
            </a>

            <a href="{{ route('contact') }}" class="site-header__cta">
                <span>Nous contacter</span>
                <span class="site-header__cta-arrow" aria-hidden="true">↗</span>
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


    {{-- =========================================================
        MENU PLEIN ÉCRAN (TABLETTE ET TÉLÉPHONE)
    ========================================================== --}}

    <nav
        class="mobile-menu"
        id="mobile-menu"
        aria-label="Navigation mobile"
        aria-hidden="true"
    >
        <div class="mobile-menu__glow" aria-hidden="true"></div>

        <div class="mobile-menu__inner">

            <div class="mobile-menu__links">
                @foreach ($menuLinks as $link)
                    @php($isActive = request()->routeIs($link['active']))

                    <a
                        href="{{ route($link['route']) }}"
                        style="--i: {{ $loop->index }}"
                        @class(['is-active' => $isActive])
                        @if ($isActive) aria-current="page" @endif
                    >
                        <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            <ul class="mobile-menu__solutions" aria-label="Nos solutions">
                @foreach ($menuSolutions as $solution)
                    <li style="--i: {{ $loop->index }}">
                        <a href="{{ route($solution['route']) }}">{{ $solution['title'] }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="mobile-menu__contact">
                <p>Un projet à préparer ?</p>

                <a href="tel:+33472230140" class="mobile-menu__phone">
                    04 72 23 01 40
                </a>

                <a href="{{ route('contact') }}" class="mobile-menu__cta">
                    Nous contacter <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>
    </nav>

</header>
