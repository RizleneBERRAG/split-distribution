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
    @vite('resources/css/pages/home.css')
@endpush


@section('body-class', 'page-home')


@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section class="home-hero">

        <div class="home-hero__background">
            <img
                src="{{ asset('images/home/hero-hvac.webp') }}"
                alt="Équipements CVC professionnels"
                width="1916"
                height="821"
                fetchpriority="high"
                decoding="async"
            >
        </div>

        <div class="home-hero__overlay"></div>


        <div class="home-hero__container">

            <div class="home-hero__content">

                <div class="home-hero__eyebrow">
                    <span class="home-hero__eyebrow-line"></span>

                    <span>
                        Distribution CVC professionnelle
                    </span>

                    <span class="home-hero__eyebrow-location">
                        Saint-Priest · Rhône-Alpes
                    </span>
                </div>


                <h1 class="home-hero__title">
                    Le bon matériel.

                    <span>
                        Le bon conseil.
                    </span>

                    Au bon moment.
                </h1>


                <p class="home-hero__description">
                    Climatisation, pompes à chaleur, ventilation
                    et solutions techniques pour les professionnels.
                    Un partenaire local pour accompagner vos projets
                    de la sélection du matériel jusqu'au SAV.
                </p>


                <div class="home-hero__actions">

                    <a
                        href="{{ route('solutions.index') }}"
                        class="button button--hero-primary"
                    >
                        <span>
                            Découvrir nos solutions
                        </span>

                        <span class="button__arrow">
                            ↗
                        </span>
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="button button--hero-secondary"
                    >
                        Parler à notre équipe

                        <span>
                            →
                        </span>
                    </a>

                </div>

            </div>


            {{-- SIDE CARD --}}
            <aside class="home-hero__aside">

                <div class="home-hero__brand-mark">

                    <div class="home-hero__brand-icon">
                        <img
                            src="{{ asset('images/brand/chameleon-temp.png') }}"
                            alt=""
                        >
                    </div>

                    <div>
                        <span>
                            Split Distribution
                        </span>

                        <strong>
                            Depuis 2016
                        </strong>
                    </div>

                </div>


                <div class="home-hero__aside-separator"></div>


                <p>
                    Une expertise technique locale,
                    au service des installateurs et
                    professionnels du secteur.
                </p>


                <a href="{{ route('entreprise') }}">
                    Découvrir l'entreprise

                    <span>↗</span>
                </a>

            </aside>


            <div class="home-hero__scroll">
                <span>Scroll</span>

                <div></div>
            </div>

        </div>

    </section>



    {{-- =========================================================
        TRUST BAR
    ========================================================== --}}

    <section class="home-trust">

        <div class="home-trust__container">

            <div class="home-trust__item">

                <span>01</span>

                <div>
                    <strong>
                        Stock local
                    </strong>

                    <small>
                        Saint-Priest
                    </small>
                </div>

            </div>


            <div class="home-trust__item">

                <span>02</span>

                <div>
                    <strong>
                        Conseil technique
                    </strong>

                    <small>
                        Sélection & accompagnement
                    </small>
                </div>

            </div>


            <div class="home-trust__item">

                <span>03</span>

                <div>
                    <strong>
                        Livraison
                    </strong>

                    <small>
                        Directement sur chantier
                    </small>
                </div>

            </div>


            <div class="home-trust__item">

                <span>04</span>

                <div>
                    <strong>
                        SAV
                    </strong>

                    <small>
                        Un interlocuteur professionnel
                    </small>
                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        INTRO
    ========================================================== --}}

    <section class="home-intro">

        <div class="container home-intro__grid">

            <div class="home-section-index">
                <span>01</span>

                Nos expertises
            </div>


            <div class="home-intro__content">

                <h2>
                    Des solutions techniques
                    <span>
                        adaptées à chaque projet.
                    </span>
                </h2>


                <div class="home-intro__bottom">

                    <p>
                        Split Distribution met à disposition
                        des professionnels une sélection complète
                        de solutions CVC et énergétiques.
                    </p>


                    <a
                        href="{{ route('solutions.index') }}"
                        class="home-text-link"
                    >
                        Voir toutes les solutions

                        <span>↗</span>
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        SOLUTIONS IMAGE GRID
    ========================================================== --}}

    <section class="home-expertises">

        <div class="container">

            <div class="home-expertises__grid">


                {{-- CLIMATISATION --}}
                <a
                    href="{{ route('solutions.climatisation') }}"
                    class="
                        expertise-card
                        expertise-card--large
                    "
                >

                    <img
                        src="{{ asset('images/home/climatisation.webp') }}"
                        alt="Solutions professionnelles de climatisation"
                        width="832"
                        height="1248"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">
                        <span>
                            01
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>
                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Confort thermique
                        </span>

                        <h3>
                            Climatisation
                        </h3>

                        <p>
                            Solutions résidentielles,
                            commerciales et professionnelles.
                        </p>

                    </div>

                </a>



                {{-- PAC --}}
                <a
                    href="{{ route('solutions.pompes-a-chaleur') }}"
                    class="expertise-card"
                >

                    <img
                        src="{{ asset('images/home/pac.webp') }}"
                        alt="Pompes à chaleur professionnelles"
                        width="735"
                        height="495"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">

                        <span>
                            02
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>

                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Chauffage
                        </span>

                        <h3>
                            Pompes à chaleur
                        </h3>

                    </div>

                </a>



                {{-- VENTILATION --}}
                <a
                    href="{{ route('solutions.ventilation') }}"
                    class="expertise-card"
                >

                    <img
                        src="{{ asset('images/home/ventilation.webp') }}"
                        alt="Solutions professionnelles de ventilation"
                        width="735"
                        height="554"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">

                        <span>
                            03
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>

                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Qualité de l'air
                        </span>

                        <h3>
                            Ventilation
                        </h3>

                    </div>

                </a>



                {{-- TERTIAIRE --}}
                <a
                    href="{{ route('solutions.tertiaire') }}"
                    class="
                        expertise-card
                        expertise-card--wide
                    "
                >

                    <img
                        src="{{ asset('images/home/tertiaire.webp') }}"
                        alt="Solutions CVC tertiaires"
                        width="638"
                        height="480"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">

                        <span>
                            04
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>

                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Solutions techniques
                        </span>

                        <h3>
                            Tertiaire
                        </h3>

                        <p>
                            Rooftop, groupes d'eau glacée
                            et systèmes professionnels.
                        </p>

                    </div>

                </a>



                {{-- ENERGIES --}}
                <a
                    href="{{ route('solutions.energies-renouvelables') }}"
                    class="
                        expertise-card
                        expertise-card--wide
                    "
                >

                    <img
                        src="{{ asset('images/home/energies.webp') }}"
                        alt="Solutions en énergies renouvelables"
                        width="992"
                        height="1504"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">

                        <span>
                            05
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>

                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Énergie
                        </span>

                        <h3>
                            Énergies
                        </h3>

                        <p>
                            Solutions énergétiques adaptées
                            aux nouveaux besoins des bâtiments.
                        </p>

                    </div>

                </a>



               {{-- ACCESSOIRES --}}
                <a
                    href="{{ route('solutions.accessoires') }}"
                    class="
                        expertise-card
                        expertise-card--wide
                    "
                >

                    <img
                        src="{{ asset('images/home/accessoires.webp') }}"
                        alt="Accessoires et composants pour installations CVC"
                        width="1535"
                        height="1024"
                        loading="lazy"
                        decoding="async"
                    >

                    <div class="expertise-card__overlay"></div>


                    <div class="expertise-card__top">

                        <span>
                            06
                        </span>

                        <span class="expertise-card__arrow">
                            ↗
                        </span>

                    </div>


                    <div class="expertise-card__content">

                        <span class="expertise-card__eyebrow">
                            Installation
                        </span>

                        <h3>
                            Accessoires
                        </h3>

                        <p>
                            Les composants essentiels
                            à vos installations.
                        </p>

                    </div>

                </a>

                {{-- =========================================================
                    SIGNATURE CAMELEON
                ========================================================== --}}

                <div class="expertise-chameleon">

                    <div class="expertise-chameleon__visual">

                        <div
                            class="expertise-chameleon__halo"
                            aria-hidden="true"
                        ></div>

                        <img
                            src="{{ asset('images/brand/chameleon-signature.webp') }}"
                            alt=""
                            aria-hidden="true"
                            width="1536"
                            height="1024"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="expertise-chameleon__content">

                        <span class="expertise-chameleon__eyebrow">
                            Split Distribution
                        </span>

                        <p>
                            Des solutions qui s'adaptent
                            <br>
                            à chaque environnement.
                        </p>

                        <span
                            class="expertise-chameleon__line"
                            aria-hidden="true"
                        ></span>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        POSITIONNEMENT
    ========================================================== --}}

    <section class="home-partner">

        <div class="container home-partner__grid">


            <div class="home-section-index home-section-index--light">
                <span>02</span>

                Notre métier
            </div>


            <div class="home-partner__content">

                <div class="home-partner__heading">

                    <h2>
                        Plus qu'un
                        <span>
                            distributeur.
                        </span>
                    </h2>


                    <p>
                        Nous accompagnons les professionnels
                        dans le choix de leurs équipements,
                        leur approvisionnement et le suivi
                        technique de leurs projets.
                    </p>

                </div>


                <div class="home-partner__services">

                    <article>
                        <span>01</span>

                        <div>
                            <h3>
                                Conseil technique
                            </h3>

                            <p>
                                Des solutions sélectionnées
                                en fonction des contraintes
                                de chaque projet.
                            </p>
                        </div>
                    </article>


                    <article>
                        <span>02</span>

                        <div>
                            <h3>
                                Disponibilité
                            </h3>

                            <p>
                                Un stock local pour répondre
                                rapidement aux besoins terrain.
                            </p>
                        </div>
                    </article>


                    <article>
                        <span>03</span>

                        <div>
                            <h3>
                                Logistique
                            </h3>

                            <p>
                                Des solutions de livraison
                                adaptées aux professionnels.
                            </p>
                        </div>
                    </article>


                    <article>
                        <span>04</span>

                        <div>
                            <h3>
                                Suivi & SAV
                            </h3>

                            <p>
                                Un accompagnement qui continue
                                après la fourniture du matériel.
                            </p>
                        </div>
                    </article>

                </div>


                <a
                    href="{{ route('services') }}"
                    class="button button--partner"
                >
                    Découvrir nos services

                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>

{{-- =========================================================
    PARTENAIRES
========================================================== --}}

<section class="home-brands">

    <div class="container">

        <div class="home-brands__header">

            <div class="home-section-index">
                <span>03</span>
                Nos partenaires
            </div>


            <div class="home-brands__heading">

                <h2>
                    Des fabricants
                    <span>de référence.</span>
                </h2>

                <p>
                    Nous travaillons avec des marques reconnues du secteur
                    afin de proposer aux professionnels des équipements
                    fiables et adaptés à leurs projets.
                </p>

            </div>

        </div>

    </div>


    {{-- =====================================================
        CARROUSEL PARTENAIRES
    ====================================================== --}}

    <div class="brands-marquee">

        {{-- FONDU GAUCHE --}}
        <div
            class="brands-marquee__fade brands-marquee__fade--left"
            aria-hidden="true"
        ></div>

        {{-- FONDU DROITE --}}
        <div
            class="brands-marquee__fade brands-marquee__fade--right"
            aria-hidden="true"
        ></div>


        <div class="brands-marquee__track">


            {{-- =============================================
                PREMIÈRE SÉRIE
            ============================================== --}}

            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/atlantic.png') }}"
                    alt="Atlantic"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/general.png') }}"
                    alt="General Fujitsu"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/toshiba-carrier.png') }}"
                    alt="Toshiba Carrier"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/haier.png') }}"
                    alt="Haier HVAC Solutions"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/lennox.png') }}"
                    alt="Lennox"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/enphase.png') }}"
                    alt="Enphase"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/apsystems.png') }}"
                    alt="APsystems"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/trina-solar.png') }}"
                    alt="Trina Solar"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/qcells.png') }}"
                    alt="Qcells"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/meyer-burger.png') }}"
                    alt="Meyer Burger"
                    loading="lazy"
                >
            </div>


            <div class="brand-logo">
                <img
                    src="{{ asset('images/brands/sabiana.png') }}"
                    alt="Sabiana"
                    loading="lazy"
                >
            </div>



            {{-- =============================================
                DUPLICATION
                Nécessaire pour la boucle infinie fluide
            ============================================== --}}

            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/atlantic.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/general.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/toshiba-carrier.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/haier.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/lennox.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/enphase.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/apsystems.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/trina-solar.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/qcells.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/meyer-burger.png') }}"
                    alt=""
                >
            </div>


            <div
                class="brand-logo"
                aria-hidden="true"
            >
                <img
                    src="{{ asset('images/brands/sabiana.png') }}"
                    alt=""
                >
            </div>

        </div>

    </div>


    {{-- =====================================================
        BAS DE SECTION
    ====================================================== --}}

    <div class="container home-brands__bottom">

        <span>
            Survolez pour mettre le défilement en pause.
        </span>


        <span>
            Une sélection pensée pour les besoins du terrain.
        </span>

    </div>

</section>

    {{-- =========================================================
        CTA FINAL
    ========================================================== --}}

    <section class="home-contact-cta">

        <div class="container home-contact-cta__container">

            <div>

                <span class="home-contact-cta__eyebrow">
                    Votre projet commence ici
                </span>


                <h2>
                    Une référence ?
                    <span>
                        Un besoin technique ?
                    </span>
                </h2>

            </div>


            <div class="home-contact-cta__right">

                <p>
                    Échangez avec notre équipe
                    pour identifier la solution adaptée.
                </p>


                <a
                    href="{{ route('contact') }}"
                    class="home-contact-cta__button"
                >
                    Nous contacter

                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>

@endsection
