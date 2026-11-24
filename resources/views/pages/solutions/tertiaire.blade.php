@extends('layouts.app')


@section('title', 'Solutions CVC tertiaires | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans la sélection de solutions CVC adaptées aux bâtiments tertiaires, commerces, bureaux et locaux d’activité.'
)

@section('body-class', 'page-tertiaire')


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
                    <span aria-current="page">Tertiaire</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Solutions tertiaires
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Un bâtiment.
                    <span>Plusieurs rythmes.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Nous aidons les professionnels à relier volumes, usages et contraintes
                    pour construire une réponse CVC cohérente à l’échelle du projet.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('devis', ['famille' => 'tertiaire']) }}">
                        <span>Demander un devis</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#lecture">
                        <span>Découvrir l’approche</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <ul class="ax-chips" aria-label="Les architectures">
                    <li><span>01</span> Rooftop</li>
                    <li><span>02</span> DRV / VRV</li>
                    <li><span>03</span> Eau glacée</li>
                    <li><span>04</span> Traitement d’air</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media ax-page-hero__media--landscape">
                <img
                    src="{{ asset('images/home/tertiaire.webp') }}"
                    alt="Local technique d’une installation CVC tertiaire"
                    width="638"
                    height="480"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge">
                    <span>Un Projet</span>
                    <strong>Cohérent</strong>
                    <small>Système · Un seul ensemble</small>
                </div>

                <figcaption><span>Confort</span> Zone par zone</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. LA LECTURE DU PROJET
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" id="lecture" aria-labelledby="lecture-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">01 — La lecture du projet · Avant le matériel</p>
                    <h2 id="lecture-title">
                        La bonne solution ne commence pas
                        <span>par une référence.</span>
                    </h2>
                </div>
            </div>

            <ol class="ax-steps">
                <li>
                    <span>01 · Le lieu</span>
                    <h3>Observer</h3>
                    <p>Volumes, enveloppe, accès et contraintes d’implantation.</p>
                </li>
                <li>
                    <span>02 · Les usages</span>
                    <h3>Comprendre</h3>
                    <p>Occupation, horaires, activité et confort réellement attendu.</p>
                </li>
                <li>
                    <span>03 · Le système</span>
                    <h3>Composer</h3>
                    <p>Production, diffusion, régulation et accessoires cohérents.</p>
                </li>
                <li>
                    <span>04 · L’exploitation</span>
                    <h3>Anticiper</h3>
                    <p>Simplicité de pilotage, disponibilité et évolution du besoin.</p>
                </li>
            </ol>

            <dl class="ax-criteria" aria-label="Représentation des différents usages d’un bâtiment tertiaire">
                <div><dt>Bureaux</dt><dd>Niveau 04 · 08:00—19:00</dd></div>
                <div><dt>Accueil</dt><dd>Niveau 03 · Variable</dd></div>
                <div><dt>Commerce</dt><dd>Niveau 02 · 10:00—20:00</dd></div>
                <div><dt>Technique</dt><dd>Niveau 01 · Continu</dd></div>
            </dl>

        </div>
    </section>



    {{-- =========================================================
        02. LES ARCHITECTURES
    ========================================================== --}}

    <section class="ax-section ax-section--dark" id="architectures" aria-labelledby="architectures-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">02 — Les architectures · Une logique pour chaque contexte</p>
                    <h2 id="architectures-title">
                        Quatre familles.
                        <span>Aucune recette.</span>
                    </h2>
                </div>

                <p>
                    La puissance ne suffit pas à décider. Diffusion, zonage,
                    réseau disponible et exploitation orientent l’architecture.
                </p>
            </div>

            <div class="ax-tiles">
                @foreach ([
                    ['letter' => 'R', 'type' => '01 · Grand volume', 'title' => 'Rooftop', 'text' => 'Une unité compacte en toiture pour traiter les volumes professionnels.', 'tag' => 'Commerce · activité'],
                    ['letter' => 'D', 'type' => '02 · Multi-zone', 'title' => 'DRV / VRV', 'text' => 'Une réponse modulable pour gérer plusieurs espaces indépendamment.', 'tag' => 'Bureaux · hôtellerie'],
                    ['letter' => 'E', 'type' => '03 · Hydraulique', 'title' => 'Eau glacée', 'text' => 'Une production centralisée à coordonner avec le réseau et les émetteurs.', 'tag' => 'Ensemble tertiaire'],
                    ['letter' => 'A', 'type' => '04 · Qualité d’air', 'title' => 'CTA', 'text' => 'Une configuration dédiée aux débits, à la filtration et au confort.', 'tag' => 'Traitement d’air'],
                ] as $system)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ $system['letter'] }}</span>

                        <div>
                            <p class="ax-tile__type">{{ $system['type'] }}</p>
                            <h3>{{ $system['title'] }}</h3>
                            <p>{{ $system['text'] }}</p>
                        </div>

                        <ul class="ax-tags">
                            <li>{{ $system['tag'] }}</li>
                        </ul>
                    </article>
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        03. LES RÉALITÉS TERRAIN
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="terrain-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">03 — Les réalités terrain · Un système qui suit la vie du lieu</p>
                    <h2 id="terrain-title">
                        Le bâtiment n’est jamais
                        <span>immobile.</span>
                    </h2>
                </div>
            </div>

            <div class="ax-tiles ax-tiles--4">
                @foreach ([
                    ['title' => 'Bureaux', 'tag' => 'Occupation variable'],
                    ['title' => 'Commerces', 'tag' => 'Forte amplitude'],
                    ['title' => 'Hôtellerie', 'tag' => 'Confort individuel'],
                    ['title' => 'Activité', 'tag' => 'Contraintes métier'],
                ] as $use)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <h3>{{ $use['title'] }}</h3>

                        <ul class="ax-tags">
                            <li>{{ $use['tag'] }}</li>
                        </ul>
                    </article>
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">04 — Construire la réponse</p>

            <h2 id="final-title">
                Commençons par comprendre
                <span>votre bâtiment.</span>
            </h2>

            <p class="ax-final__text">
                Plans, usages, puissances envisagées ou simples contraintes de chantier :
                partagez-nous les premières données du projet.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Échanger avec l’équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
