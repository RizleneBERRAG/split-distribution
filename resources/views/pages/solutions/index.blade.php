@extends('layouts.app')


@section(
    'title',
    'Nos solutions | Split Distribution'
)


@section(
    'description',
    'Découvrez les solutions Split Distribution : climatisation, pompes à chaleur, ventilation, tertiaire, énergies et accessoires professionnels.'
)


@push('styles')
    @vite('resources/css/pages/solutions.css')
@endpush


@section('body-class', 'page-solutions')


@section('content')

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section class="solutions-hero">

        <div class="container solutions-hero__container">

            <div class="solutions-hero__top">

                <div class="solutions-hero__eyebrow">
                    <span></span>
                    Nos expertises
                </div>

                <span class="solutions-hero__index">
                    01 / 06
                </span>

            </div>


            <div class="solutions-hero__content">

                <h1>
                    Des solutions
                    <span>pour chaque besoin.</span>
                </h1>


                <div class="solutions-hero__intro">

                    <p>
                        Du résidentiel au tertiaire, Split Distribution
                        accompagne les professionnels avec une sélection
                        complète de solutions CVC et énergétiques.
                    </p>


                    <a href="#expertises">
                        Explorer nos solutions
                        <span>↓</span>
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =========================================================
        INTRO STRIP
    ========================================================== --}}

    <section class="solutions-strip">

        <div class="container solutions-strip__container">

            <span>
                Climatisation
            </span>

            <i></i>

            <span>
                Pompes à chaleur
            </span>

            <i></i>

            <span>
                Ventilation
            </span>

            <i></i>

            <span>
                Tertiaire
            </span>

            <i></i>

            <span>
                Énergies
            </span>

            <i></i>

            <span>
                Accessoires
            </span>

        </div>

    </section>



    {{-- =========================================================
        EXPERTISES
    ========================================================== --}}

    <section
        class="solutions-list"
        id="expertises"
    >

        <div class="container">


            {{-- 01 CLIMATISATION --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.climatisation') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        01
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Confort thermique
                        </span>

                        <h2>
                            Climatisation
                        </h2>

                        <p>
                            Des solutions adaptées aux installations
                            résidentielles, commerciales et professionnelles.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/climatisation.webp') }}"
                            alt="Solutions de climatisation professionnelles"
                            width="832"
                            height="1248"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>



            {{-- 02 PAC --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.pompes-a-chaleur') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        02
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Chauffage
                        </span>

                        <h2>
                            Pompes à chaleur
                        </h2>

                        <p>
                            Des équipements performants pour le chauffage,
                            le rafraîchissement et la production énergétique.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/pac.webp') }}"
                            alt="Pompes à chaleur"
                            width="735"
                            height="495"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>



            {{-- 03 VENTILATION --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.ventilation') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        03
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Qualité de l'air
                        </span>

                        <h2>
                            Ventilation
                        </h2>

                        <p>
                            Des solutions conçues pour assurer renouvellement
                            d'air, confort et maîtrise des environnements.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/ventilation.webp') }}"
                            alt="Solutions professionnelles de ventilation"
                            width="735"
                            height="554"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>



            {{-- 04 TERTIAIRE --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.tertiaire') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        04
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Haute puissance
                        </span>

                        <h2>
                            Tertiaire
                        </h2>

                        <p>
                            Rooftop, groupes d'eau glacée et solutions CVC
                            destinées aux installations techniques exigeantes.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/tertiaire.webp') }}"
                            alt="Solutions CVC tertiaires"
                            width="638"
                            height="480"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>



            {{-- 05 ENERGIES --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.energies-renouvelables') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        05
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Performance énergétique
                        </span>

                        <h2>
                            Énergies
                        </h2>

                        <p>
                            Des solutions adaptées aux nouveaux enjeux
                            de performance et de consommation énergétique.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/energies.webp') }}"
                            alt="Solutions énergétiques"
                            width="992"
                            height="1504"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>



            {{-- 06 ACCESSOIRES --}}
            <article class="solution-row">

                <a
                    href="{{ route('solutions.accessoires') }}"
                    class="solution-row__link"
                >

                    <div class="solution-row__number">
                        06
                    </div>


                    <div class="solution-row__content">

                        <span class="solution-row__eyebrow">
                            Installation
                        </span>

                        <h2>
                            Accessoires
                        </h2>

                        <p>
                            Les composants et équipements nécessaires
                            à la réalisation complète de vos installations.
                        </p>

                    </div>


                    <div class="solution-row__visual">

                        <img
                            src="{{ asset('images/home/accessoires.webp') }}"
                            alt="Accessoires et composants pour installations CVC"
                            width="1535"
                            height="1024"
                            loading="lazy"
                            decoding="async"
                        >

                    </div>


                    <div class="solution-row__arrow">
                        ↗
                    </div>

                </a>

            </article>

        </div>

    </section>



    {{-- =========================================================
        ACCOMPAGNEMENT
    ========================================================== --}}

    <section class="solutions-support">

        <div class="container solutions-support__container">

            <div class="solutions-support__left">

                <span class="solutions-support__eyebrow">
                    L'accompagnement Split
                </span>

                <h2>
                    Le matériel n'est
                    <span>qu'une partie du projet.</span>
                </h2>

            </div>


            <div class="solutions-support__right">

                <p>
                    Notre équipe accompagne les professionnels
                    dans la sélection des équipements, leur disponibilité,
                    la logistique et le suivi après-vente.
                </p>


                <a
                    href="{{ route('services') }}"
                    class="button button--primary"
                >
                    Découvrir nos services

                    <span>
                        ↗
                    </span>
                </a>

            </div>

        </div>

    </section>



    {{-- =========================================================
        FINAL CTA
    ========================================================== --}}

    <section class="solutions-cta">

        <div class="container solutions-cta__container">

            <div>

                <span>
                    Besoin d'aide ?
                </span>

                <h2>
                    Trouvons la bonne
                    solution ensemble.
                </h2>

            </div>


            <a
                href="{{ route('contact') }}"
                class="solutions-cta__button"
            >
                <span>
                    Parler à notre équipe
                </span>

                <strong>
                    ↗
                </strong>
            </a>

        </div>

    </section>

@endsection
