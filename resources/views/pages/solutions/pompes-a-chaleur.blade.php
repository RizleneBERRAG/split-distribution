@extends('layouts.app')


@section('title', 'Pompes à chaleur professionnelles | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de pompes à chaleur Air/Air et Air/Eau adaptées à leurs projets.'
)

@push('styles')
    @vite('resources/css/pages/pompes-a-chaleur.css')
@endpush

@section('body-class', 'page-pac')


@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero" aria-labelledby="page-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid">

            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <a href="{{ route('solutions.index') }}">Solutions</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Pompes à chaleur</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Pompes à chaleur
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    La chaleur de l’air,
                    <span>au service du bâtiment.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Des solutions Air/Air et Air/Eau pour répondre aux besoins de
                    chauffage, de confort d’été et, selon les équipements, d’eau chaude sanitaire.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('devis', ['famille' => 'pompes-a-chaleur']) }}">
                        <span>Demander un devis</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#familles">
                        <span>Voir les solutions</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <ul class="ax-chips">
                    <li><span>01</span> Air / Air</li>
                    <li><span>02</span> Air / Eau</li>
                    <li><span>03</span> Résidentiel</li>
                    <li><span>04</span> Petit tertiaire</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/solutions/pompes-a-chaleur/hero-pac.webp') }}"
                    alt="Pompe à chaleur installée à proximité d’une maison contemporaine"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge">
                    <span>Énergie disponible</span>
                    <strong>Air extérieur</strong>
                    <small>Valorisée pour le confort intérieur</small>
                </div>

                <figcaption aria-hidden="true"><span>02</span> PAC</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. LE PRINCIPE
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" aria-labelledby="principe-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Le principe</p>
                    <h2 id="principe-title">
                        Prélever dehors.
                        <span>Restituer dedans.</span>
                    </h2>
                </div>

                <p>Une énergie à valoriser</p>
            </div>

            <ol class="ax-steps" aria-label="Principe simplifié d’une pompe à chaleur">
                <li><span>01</span><h3>Capter</h3><p>Les calories présentes dans l’air extérieur.</p></li>
                <li><span>02</span><h3>Transformer</h3><p>L’énergie grâce au cycle thermodynamique.</p></li>
                <li><span>03</span><h3>Diffuser</h3><p>La chaleur via l’air ou un circuit hydraulique.</p></li>
            </ol>

        </div>
    </section>



    {{-- =========================================================
        02. LES SOLUTIONS
    ========================================================== --}}

    <section class="ax-section ax-section--dark" id="familles" aria-labelledby="familles-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">02 — Les solutions</p>
                    <h2 id="familles-title">
                        Choisir le bon vecteur
                        <span>de confort.</span>
                    </h2>
                </div>

                <p>Deux familles, deux logiques</p>
            </div>

            <div class="ax-tiles">
                @foreach ([
                    ['letter' => 'A', 'type' => 'Air diffusé', 'title' => 'Air / Air', 'text' => 'La chaleur est diffusée directement dans les espaces par les unités intérieures. Une réponse flexible pour chauffer et rafraîchir les zones.', 'tags' => ['Mono ou multi-zone', 'Chauffage & rafraîchissement', 'Résidentiel et commerces']],
                    ['letter' => 'E', 'type' => 'Eau chauffée', 'title' => 'Air / Eau', 'text' => 'Les calories alimentent un réseau hydraulique compatible avec les émetteurs du projet et, selon la configuration, l’eau chaude sanitaire.', 'tags' => ['Plancher chauffant', 'Radiateurs compatibles', 'Neuf ou rénovation étudiée']],
                ] as $family)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ $family['letter'] }}</span>

                        <div>
                            <p class="ax-tile__type">{{ $family['type'] }}</p>
                            <h3>{{ $family['title'] }}</h3>
                            <p>{{ $family['text'] }}</p>
                        </div>

                        <ul class="ax-tags">
                            @foreach ($family['tags'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        03. BIEN SÉLECTIONNER
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="selection-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">03 — Bien sélectionner</p>
                    <h2 id="selection-title">
                        Une PAC se choisit
                        <span>avec le bâtiment.</span>
                    </h2>
                </div>

                <p>Chaque détail compte</p>
            </div>

            <div class="ax-prose">
                <p>
                    La puissance seule ne suffit pas. L’existant, le climat et les attentes
                    d’usage doivent être étudiés ensemble pour orienter la sélection.
                </p>
            </div>

            <dl class="ax-criteria">
                <div><dt>Déperditions</dt><dd>Volume, isolation, exposition et température extérieure de référence.</dd></div>
                <div><dt>Émetteurs</dt><dd>Unités intérieures, plancher chauffant ou réseau de radiateurs existant.</dd></div>
                <div><dt>Implantation</dt><dd>Distances, intégration extérieure, voisinage et niveau sonore attendu.</dd></div>
                <div><dt>Usage</dt><dd>Chauffage seul, confort quatre saisons ou production d’eau chaude.</dd></div>
            </dl>

        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL : L'ACCOMPAGNEMENT
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">L’accompagnement Split Distribution</p>

            <h2 id="final-title">
                Le bon équipement est celui qui reste cohérent
                <span>avec l’ensemble du projet.</span>
            </h2>

            <p class="ax-final__text">
                Notre équipe aide les professionnels à comparer les solutions,
                sélectionner les références et préparer l’approvisionnement du chantier.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Parler à un conseiller</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
