@extends('layouts.app')


@section(
    'title',
    'Split Distribution | Distribution CVC & Énergies'
)


@section(
    'description',
    'Split Distribution accompagne les professionnels en climatisation, pompes à chaleur, ventilation, solutions tertiaires et énergies.'
)


@push('styles')
    @vite('resources/css/pages/accueil.css')
@endpush


@section('body-class', 'page-home')


@php
    $solutions = [
        [
            'route' => 'solutions.climatisation',
            'image' => 'images/home/climatisation.webp',
            'alt' => 'Solutions professionnelles de climatisation',
            'eyebrow' => 'Confort thermique',
            'title' => 'Climatisation',
            'text' => 'Mono et multi-split. Solutions résidentielles, commerciales et professionnelles.',
        ],
        [
            'route' => 'solutions.pompes-a-chaleur',
            'image' => 'images/home/pac.webp',
            'alt' => 'Pompes à chaleur professionnelles',
            'eyebrow' => 'Chauffage',
            'title' => 'Pompes à chaleur',
            'text' => 'Air / air et air / eau, pour chauffer les bâtiments plus efficacement.',
        ],
        [
            'route' => 'solutions.ventilation',
            'image' => 'images/home/ventilation.webp',
            'alt' => 'Solutions professionnelles de ventilation',
            'eyebrow' => 'Qualité de l’air',
            'title' => 'Ventilation',
            'text' => 'VMC et centrales de traitement d’air pour un air sain.',
        ],
        [
            'route' => 'solutions.tertiaire',
            'image' => 'images/home/tertiaire.webp',
            'alt' => 'Solutions CVC tertiaires',
            'eyebrow' => 'Solutions techniques',
            'title' => 'Tertiaire',
            'text' => 'Rooftop, groupes d’eau glacée et systèmes professionnels.',
        ],
        [
            'route' => 'solutions.energies-renouvelables',
            'image' => 'images/home/energies.webp',
            'alt' => 'Solutions en énergies renouvelables',
            'eyebrow' => 'Énergie',
            'title' => 'Énergies',
            'text' => 'Solutions énergétiques adaptées aux nouveaux besoins des bâtiments.',
        ],
        [
            'route' => 'solutions.accessoires',
            'image' => 'images/home/accessoires.webp',
            'alt' => 'Accessoires et composants pour installations CVC',
            'eyebrow' => 'Installation',
            'title' => 'Accessoires',
            'text' => 'Les composants essentiels à vos installations.',
        ],
    ];

    $engagements = [
        [
            'title' => 'Conseil technique',
            'text' => 'Des solutions sélectionnées en fonction des contraintes de chaque projet.',
            'image' => 'images/contact/technical-advice.webp',
        ],
        [
            'title' => 'Disponibilité',
            'text' => 'Un stock local, à Saint-Priest, pour répondre rapidement aux besoins terrain.',
            'image' => 'images/services/order-preparation.webp',
        ],
        [
            'title' => 'Logistique',
            'text' => 'Des solutions de livraison adaptées aux professionnels, jusque sur le chantier.',
            'image' => 'images/home/accessoires.webp',
        ],
        [
            'title' => 'Suivi & SAV',
            'text' => 'Un accompagnement qui continue après la fourniture du matériel.',
            'image' => 'images/entreprise/team-work.webp',
        ],
    ];

    $brands = [
        ['file' => 'haier.png', 'name' => 'Haier HVAC Solutions'],
        ['file' => 'atlantic.png', 'name' => 'Atlantic'],
        ['file' => 'general.png', 'name' => 'General Fujitsu'],
        ['file' => 'toshiba-carrier.png', 'name' => 'Toshiba Carrier'],
        ['file' => 'lennox.png', 'name' => 'Lennox'],
        ['file' => 'sabiana.png', 'name' => 'Sabiana'],
        ['file' => 'enphase.png', 'name' => 'Enphase'],
        ['file' => 'apsystems.png', 'name' => 'APsystems'],
        ['file' => 'trina-solar.png', 'name' => 'Trina Solar'],
        ['file' => 'qcells.png', 'name' => 'Qcells'],
        ['file' => 'meyer-burger.png', 'name' => 'Meyer Burger'],
    ];
@endphp


@section('content')

    {{-- =========================================================
        1. HERO : flux d'air + photo qui s'ouvre en plein écran
    ========================================================== --}}

    <section class="ax-hero" aria-labelledby="ax-hero-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-hero__glow" aria-hidden="true"></div>

        <figure class="ax-hero__window">
            <img
                src="{{ asset('images/home/hero-hvac.webp') }}"
                alt="Maison équipée de solutions de climatisation et de pompe à chaleur"
                width="1916"
                height="821"
                fetchpriority="high"
                decoding="async"
            >

            <div class="ax-hero__shade" aria-hidden="true"></div>

            <figcaption class="ax-hero__caption" aria-hidden="true">
                <p>Du choix du matériel <span>jusqu’au SAV.</span></p>

                <ul class="ax-hero__tags">
                    <li><strong>Climatisation</strong> Mono / Multi-split</li>
                    <li><strong>Pompes à chaleur</strong> Air / Air · Air / Eau</li>
                    <li><strong>Ventilation</strong> VMC / CTA</li>
                </ul>
            </figcaption>
        </figure>

        <div class="ax-hero__inner ax-container">

            <p class="ax-eyebrow">
                <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                Distribution CVC professionnelle · Saint-Priest
            </p>

            <h1 class="ax-hero__title" id="ax-hero-title">
                <span class="ax-line">Le bon matériel.</span>
                <span class="ax-line ax-line--green">Le bon conseil.</span>
                <span class="ax-line">Au bon moment.</span>
            </h1>

            <div class="ax-hero__bottom">
                <p>
                    Climatisation, pompes à chaleur, ventilation et solutions
                    techniques pour les professionnels. Un partenaire local,
                    de la sélection du matériel jusqu’au SAV.
                </p>

                <div class="ax-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('solutions.index') }}">
                        <span>Découvrir nos solutions</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="{{ route('contact') }}">
                        <span>Parler à notre équipe</span>
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

        </div>

        <div class="ax-hero__scroll" aria-hidden="true">
            <span>Faites défiler</span>
            <i></i>
        </div>

    </section>



    {{-- =========================================================
        2. BANDEAU DES SOLUTIONS (vitesse liée au défilement)
    ========================================================== --}}

    <section class="ax-marquee" aria-label="Nos familles de solutions">
        <div class="ax-marquee__track">
            @foreach ([false, true] as $copy)
                <div class="ax-marquee__group" @if ($copy) aria-hidden="true" @endif>
                    @foreach ($solutions as $solution)
                        <span>{{ $solution['title'] }}</span>
                        <i aria-hidden="true"></i>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>



    {{-- =========================================================
        3. MANIFESTE + CHIFFRES CLÉS (faits vérifiables uniquement)
    ========================================================== --}}

    <section class="ax-manifesto" aria-labelledby="ax-manifesto-title">
        <div class="ax-container">

            <p class="ax-kicker" id="ax-manifesto-title">01 — Qui sommes-nous</p>

            <p class="ax-lead-text" data-ax-words>
                Depuis 2016, Split Distribution équipe les installateurs et les
                professionnels du secteur en climatisation, pompes à chaleur,
                ventilation et énergies. Du choix du matériel jusqu’au SAV,
                une équipe technique locale, à Saint-Priest.
            </p>

            <dl class="ax-figures">
                <div>
                    <dt>Création à Saint-Priest</dt>
                    <dd><span data-count="2016" data-count-from="1996">2016</span></dd>
                </div>
                <div>
                    <dt>Familles de solutions</dt>
                    <dd><span data-count="6">6</span></dd>
                </div>
                <div>
                    <dt>Marques partenaires</dt>
                    <dd><span data-count="11">11</span></dd>
                </div>
            </dl>

        </div>
    </section>



    {{-- =========================================================
        4. SOLUTIONS : galerie horizontale
    ========================================================== --}}

    <section class="ax-solutions" aria-labelledby="ax-solutions-title">

        <div class="ax-solutions__head ax-container">
            <div>
                <p class="ax-kicker">02 — Nos solutions</p>
                <h2 id="ax-solutions-title" data-ax-title>
                    Six familles de solutions.
                    <span>Adaptées à chaque projet.</span>
                </h2>
            </div>

            <a class="ax-link" href="{{ route('solutions.index') }}">
                Voir toutes les solutions <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="ax-solutions__viewport">
            <ol class="ax-solutions__track">
                @foreach ($solutions as $solution)
                    <li class="ax-panel">
                        <a href="{{ route($solution['route']) }}">
                            <div class="ax-panel__media">
                                <img
                                    src="{{ asset($solution['image']) }}"
                                    alt="{{ $solution['alt'] }}"
                                    loading="lazy"
                                    decoding="async"
                                >
                            </div>

                            <span class="ax-panel__number" aria-hidden="true">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <div class="ax-panel__body">
                                <span class="ax-panel__eyebrow">{{ $solution['eyebrow'] }}</span>
                                <h3>{{ $solution['title'] }}</h3>
                                <p>{{ $solution['text'] }}</p>
                            </div>

                            <span class="ax-panel__arrow" aria-hidden="true">↗</span>
                        </a>
                    </li>
                @endforeach
            </ol>

            <div class="ax-solutions__progress ax-container" aria-hidden="true">
                <span></span>
            </div>
        </div>

    </section>



    {{-- =========================================================
        5. ENGAGEMENTS : cartes qui s'empilent
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift ax-engagements" aria-labelledby="ax-engagements-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">03 — Notre métier</p>
                    <h2 id="ax-engagements-title">
                        Plus qu’un
                        <span>distributeur.</span>
                    </h2>
                </div>

                <p>
                    Nous accompagnons les professionnels dans le choix de leurs
                    équipements, leur approvisionnement et le suivi technique
                    de leurs projets.
                </p>
            </div>

            <div class="ax-stack">
                @foreach ($engagements as $engagement)
                    <article class="ax-card ax-card--{{ $loop->iteration }}" style="--i: {{ $loop->index }}">
                        <div class="ax-card__body">
                            <span class="ax-card__number" aria-hidden="true">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <div>
                                <h3>{{ $engagement['title'] }}</h3>
                                <p>{{ $engagement['text'] }}</p>
                            </div>
                        </div>

                        <div class="ax-card__media">
                            <img
                                src="{{ asset($engagement['image']) }}"
                                alt=""
                                loading="lazy"
                                decoding="async"
                            >
                        </div>

                        <span class="ax-card__veil" aria-hidden="true"></span>
                    </article>
                @endforeach
            </div>

            <a class="ax-btn ax-btn--dark ax-engagements__cta" href="{{ route('services') }}">
                <span>Découvrir nos services</span>
                <span aria-hidden="true">↗</span>
            </a>

        </div>
    </section>



    {{-- =========================================================
        6. CEE
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--flush-top" aria-labelledby="ax-cee-title">
        <div class="ax-container">
            <div class="ax-cee">
            <img
                class="ax-cee__mark"
                src="{{ asset('images/brand/cee-certificates.png') }}"
                alt="Certificats d’économies d’énergie — CEE"
                width="738"
                height="240"
                loading="lazy"
            >

            <div class="ax-cee__copy">
                <p class="ax-kicker">Un dispositif à intégrer au bon moment</p>
                <h2 id="ax-cee-title">Les économies d’énergie font aussi partie de l’étude.</h2>
                <p>
                    Selon la nature des travaux et l’éligibilité de l’opération,
                    notre équipe vous aide à prendre en compte le dispositif CEE
                    dès la préparation du projet.
                </p>
            </div>

            <a class="ax-link ax-link--dark" href="{{ route('contact') }}">
                Parler de mon opération <span aria-hidden="true">↗</span>
            </a>
            </div>
        </div>
    </section>



    {{-- =========================================================
        7. MARQUES
    ========================================================== --}}

    <section class="ax-section ax-section--white ax-brands" id="marques" aria-labelledby="ax-brands-title">

        <div class="ax-container ax-head">
            <div>
                <p class="ax-kicker">04 — Nos partenaires</p>
                <h2 id="ax-brands-title">
                    Des fabricants
                    <span>de référence.</span>
                </h2>
            </div>

            <p>
                Nous travaillons avec des marques reconnues du secteur afin de
                proposer aux professionnels des équipements fiables et adaptés
                à leurs projets.
            </p>
        </div>

        <ul class="ax-brands__list" aria-label="Marques partenaires">
            @foreach ($brands as $brand)
                <li>
                    <img src="{{ asset('images/brands/' . $brand['file']) }}" alt="{{ $brand['name'] }}" loading="lazy">
                </li>
            @endforeach
        </ul>

        @foreach (['', 'ax-brands__row--reverse'] as $direction)
            <div class="ax-brands__row {{ $direction }}" aria-hidden="true">
                <div class="ax-brands__track">
                    @foreach ([1, 2] as $copy)
                        @foreach ($brands as $brand)
                            <span class="ax-brands__logo">
                                <img src="{{ asset('images/brands/' . $brand['file']) }}" alt="" loading="lazy">
                            </span>
                        @endforeach
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>



    {{-- =========================================================
        8. APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="ax-final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Votre projet commence ici</p>

            <h2 id="ax-final-title">
                Une référence ?
                <span>Un besoin technique ?</span>
            </h2>

            <p class="ax-final__text">
                Échangez avec notre équipe pour identifier la solution adaptée.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Nous contacter</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
