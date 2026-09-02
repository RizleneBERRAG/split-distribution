@extends('layouts.app')


@section(
    'title',
    'Climatisation professionnelle | Split Distribution'
)


@section(
    'description',
    'Split Distribution accompagne les professionnels dans leurs projets de climatisation résidentielle, commerciale et tertiaire.'
)


@push('styles')
    @vite('resources/css/pages/climatisation.css')
@endpush


@section('body-class', 'page-climatisation')


@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section class="clim-hero">

        <div class="clim-hero__grid">

            {{-- CONTENT --}}
            <div class="clim-hero__content">

                <div class="clim-hero__breadcrumb">

                    <a href="{{ route('solutions.index') }}">
                        Solutions
                    </a>

                    <span>/</span>

                    <strong>
                        Climatisation
                    </strong>

                </div>


                <div class="clim-hero__eyebrow">
                    <span></span>

                    Confort thermique
                </div>


                <h1>
                    Climatisation
                    <span>professionnelle.</span>
                </h1>


                <p class="clim-hero__intro">
                    Des solutions adaptées au résidentiel,
                    aux commerces et aux environnements professionnels,
                    avec l'accompagnement technique de notre équipe.
                </p>


                <div class="clim-hero__actions">

                    <a
                        href="{{ route('contact') }}"
                        class="button button--primary"
                    >
                        Parler de votre projet

                        <span>↗</span>
                    </a>


                    <a
                        href="#clim-usages"
                        class="clim-hero__secondary"
                    >
                        Découvrir les solutions

                        <span>↓</span>
                    </a>

                </div>


                <div class="clim-hero__meta">

                    <div>
                        <span>01</span>

                        <strong>
                            Résidentiel
                        </strong>
                    </div>

                    <div>
                        <span>02</span>

                        <strong>
                            Commerce
                        </strong>
                    </div>

                    <div>
                        <span>03</span>

                        <strong>
                            Tertiaire
                        </strong>
                    </div>

                </div>

            </div>


            {{-- VISUAL --}}
            <div class="clim-hero__visual">

                <img
                    src="{{ asset('images/solutions/climatisation-hero.jpg') }}"
                    alt="Solution professionnelle de climatisation"
                >


                <div class="clim-hero__visual-overlay"></div>


                <div class="clim-hero__visual-index">
                    <span>
                        Split Distribution
                    </span>

                    <strong>
                        CLIM / 01
                    </strong>
                </div>


                <div class="clim-hero__visual-card">

                    <span>
                        Notre approche
                    </span>

                    <p>
                        Identifier la solution adaptée
                        avant de choisir le matériel.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        INTRO
    ========================================================== --}}

    <section class="clim-intro">

        <div class="container clim-intro__grid">

            <div class="clim-section-index">
                <span>01</span>

                Climatisation
            </div>


            <div class="clim-intro__content">

                <h2>
                    Un système adapté
                    <span>à chaque environnement.</span>
                </h2>


                <div class="clim-intro__text">

                    <p>
                        Chaque projet impose ses propres contraintes :
                        volume, usage, puissance, implantation,
                        acoustique ou encore architecture du bâtiment.
                    </p>

                    <p>
                        Split Distribution accompagne les professionnels
                        dans la sélection de solutions cohérentes avec
                        les caractéristiques réelles de l'installation.
                    </p>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        USAGES
    ========================================================== --}}

    <section
        class="clim-usages"
        id="clim-usages"
    >

        <div class="container">

            <div class="clim-usages__grid">


                {{-- RESIDENTIEL --}}
                <article class="clim-usage">

                    <div class="clim-usage__top">
                        <span>01</span>

                        <span>
                            Habitat
                        </span>
                    </div>


                    <div class="clim-usage__content">

                        <h3>
                            Résidentiel
                        </h3>

                        <p>
                            Des solutions adaptées aux maisons
                            et appartements, du confort d'une seule
                            pièce aux installations multi-zones.
                        </p>

                    </div>

                </article>



                {{-- COMMERCE --}}
                <article class="clim-usage">

                    <div class="clim-usage__top">
                        <span>02</span>

                        <span>
                            Professionnels
                        </span>
                    </div>


                    <div class="clim-usage__content">

                        <h3>
                            Commerces
                        </h3>

                        <p>
                            Climatisation de boutiques, restaurants,
                            espaces recevant du public et locaux
                            professionnels.
                        </p>

                    </div>

                </article>



                {{-- TERTIAIRE --}}
                <article class="clim-usage clim-usage--dark">

                    <div class="clim-usage__top">
                        <span>03</span>

                        <span>
                            Bâtiments
                        </span>
                    </div>


                    <div class="clim-usage__content">

                        <h3>
                            Petit tertiaire
                        </h3>

                        <p>
                            Des systèmes adaptés aux bureaux,
                            plateaux professionnels et installations
                            nécessitant davantage de puissance.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>

@endsection