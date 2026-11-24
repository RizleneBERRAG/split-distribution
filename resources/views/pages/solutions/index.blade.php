@extends('layouts.app')


@section('title', 'Nos solutions | Split Distribution')

@section(
    'description',
    'Découvrez les solutions Split Distribution : climatisation, pompes à chaleur, ventilation, tertiaire, énergies et accessoires professionnels.'
)

@section('body-class', 'page-solutions')


@php
    $solutions = [
        [
            'number' => '01',
            'name' => 'Climatisation',
            'eyebrow' => 'Confort thermique',
            'description' => 'Mono-split, multi-split et solutions adaptées aux installations résidentielles comme professionnelles.',
            'image' => 'images/home/climatisation.webp',
            'alt' => 'Unité intérieure de climatisation',
            'width' => 832,
            'height' => 1248,
            'route' => 'solutions.climatisation',
            'available' => true,
        ],
        [
            'number' => '02',
            'name' => 'Pompes à chaleur',
            'eyebrow' => 'Chauffage & rafraîchissement',
            'description' => 'Des équipements performants pour conjuguer confort, maîtrise énergétique et fiabilité.',
            'image' => 'images/home/pac.webp',
            'alt' => 'Unités extérieures de pompes à chaleur',
            'width' => 735,
            'height' => 495,
            'route' => 'solutions.pompes-a-chaleur',
            'available' => true,
        ],
        [
            'number' => '03',
            'name' => 'Ventilation',
            'eyebrow' => 'Qualité de l’air',
            'description' => 'Renouvellement d’air, confort et maîtrise des environnements intérieurs.',
            'image' => 'images/home/ventilation.webp',
            'alt' => 'Installation de ventilation dans des bureaux',
            'width' => 735,
            'height' => 554,
            'route' => 'solutions.ventilation',
            'available' => true,
        ],
        [
            'number' => '04',
            'name' => 'Solutions tertiaires',
            'eyebrow' => 'Installations techniques',
            'description' => 'Rooftop, groupes d’eau glacée et équipements conçus pour les projets les plus exigeants.',
            'image' => 'images/home/tertiaire.webp',
            'alt' => 'Local technique d’une installation CVC tertiaire',
            'width' => 638,
            'height' => 480,
            'route' => 'solutions.tertiaire',
            'available' => true,
        ],
        [
            'number' => '05',
            'name' => 'Énergies',
            'eyebrow' => 'Performance énergétique',
            'description' => 'Des solutions pensées pour répondre aux nouveaux enjeux de consommation et de production.',
            'image' => 'images/home/energies.webp',
            'alt' => 'Panneaux solaires produisant une énergie renouvelable',
            'width' => 992,
            'height' => 1504,
            'route' => 'solutions.energies-renouvelables',
            'available' => true,
        ],
        [
            'number' => '06',
            'name' => 'Accessoires',
            'eyebrow' => 'Installation complète',
            'description' => 'Les composants, consommables et équipements indispensables à chaque chantier.',
            'image' => 'images/home/accessoires.webp',
            'alt' => 'Accessoires et composants pour installations CVC',
            'width' => 1535,
            'height' => 1024,
            'route' => 'solutions.accessoires',
            'available' => true,
        ],
    ];
@endphp


@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero ax-page-hero--text" aria-labelledby="page-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid">

            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Solutions</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    L’expertise Split Distribution
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Des solutions pensées
                    <span>pour chaque projet.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Du résidentiel au tertiaire, nous sélectionnons
                    les équipements CVC et énergétiques adaptés aux
                    réalités techniques de chaque installation.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="#expertises">
                        <span>Découvrir les expertises</span>
                        <span aria-hidden="true">↓</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="{{ route('contact') }}">
                        <span>Parler à notre équipe</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <ul class="ax-chips" aria-label="Nos engagements">
                    <li><span>01</span> Une sélection professionnelle et cohérente</li>
                    <li><span>02</span> Des équipements disponibles et suivis</li>
                    <li><span>03</span> Un conseil technique avant et après le chantier</li>
                </ul>
            </div>

            <dl class="ax-figures">
                <div>
                    <dt>familles de solutions</dt>
                    <dd>06</dd>
                </div>
                <div>
                    <dt>équipe à vos côtés</dt>
                    <dd>01</dd>
                </div>
            </dl>

        </div>

    </section>



    {{-- =========================================================
        01. NOS EXPERTISES
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" id="expertises" aria-labelledby="expertises-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Nos expertises</p>
                    <h2 id="expertises-title">
                        Une gamme complète.
                        <span>Une lecture simple.</span>
                    </h2>
                </div>

                <p>
                    Retrouvez l’essentiel de nos métiers et identifiez
                    rapidement la solution adaptée à votre projet.
                </p>
            </div>

            <div class="ax-tiles ax-tiles--3">
                @foreach ($solutions as $solution)
                    @if ($solution['available'])
                        <a
                            class="ax-tile ax-tile--photo"
                            href="{{ route($solution['route']) }}"
                            aria-label="Découvrir la solution {{ $solution['name'] }}"
                        >
                    @else
                        <div
                            class="ax-tile ax-tile--photo"
                            aria-label="Page {{ $solution['name'] }} prochainement disponible"
                        >
                    @endif

                        <img
                            src="{{ asset($solution['image']) }}"
                            alt="{{ $solution['alt'] }}"
                            width="{{ $solution['width'] }}"
                            height="{{ $solution['height'] }}"
                            loading="lazy"
                            decoding="async"
                        >

                        @if ($solution['available'])
                            <span class="ax-tile__arrow" aria-hidden="true">↗</span>
                        @endif

                        <span class="ax-tile__number" aria-hidden="true">{{ $solution['number'] }}</span>

                        <div>
                            <p class="ax-tile__type">
                                {{ $solution['eyebrow'] }}
                                @unless ($solution['available'])
                                    · Page prochainement
                                @endunless
                            </p>
                            <h3>{{ $solution['name'] }}</h3>
                            <p>{{ $solution['description'] }}</p>
                        </div>

                    @if ($solution['available'])
                        </a>
                    @else
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        02. NOTRE MÉTHODE
    ========================================================== --}}

    <section class="ax-section ax-section--dark" aria-labelledby="methode-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">02 — Notre méthode</p>
                    <h2 id="methode-title">
                        Le bon matériel ne suffit pas.
                        <span>Il faut le bon accompagnement.</span>
                    </h2>
                </div>
            </div>

            <ol class="ax-steps">
                <li><span>01</span><h3>Comprendre</h3><p>Vos contraintes, vos délais et les réalités du chantier.</p></li>
                <li><span>02</span><h3>Sélectionner</h3><p>La solution technique cohérente, disponible et durable.</p></li>
                <li><span>03</span><h3>Accompagner</h3><p>De la commande jusqu’au suivi après-vente.</p></li>
            </ol>

        </div>
    </section>



    {{-- =========================================================
        BANDEAU DES SOLUTIONS
    ========================================================== --}}

    <section class="ax-marquee" aria-label="Nos familles de solutions">
        <div class="ax-marquee__track">
            @foreach ([false, true] as $copy)
                <div class="ax-marquee__group" @if ($copy) aria-hidden="true" @endif>
                    @foreach ($solutions as $solution)
                        <span>{{ $solution['name'] }}</span>
                        <i aria-hidden="true"></i>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Un projet à étudier ?</p>

            <h2 id="final-title">
                Trouvons la bonne solution
                <span>ensemble.</span>
            </h2>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Parler à notre équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
