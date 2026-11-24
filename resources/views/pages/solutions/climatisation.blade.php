@extends('layouts.app')


@section('title', 'Climatisation professionnelle | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de solutions de climatisation pour le résidentiel, les commerces et le petit tertiaire.'
)

@section('body-class', 'page-climatisation')


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
                    <span aria-current="page">Climatisation</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Climatisation professionnelle
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Le confort,
                    <span>dimensionné avec précision.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Du mono-split au système gainable, nous aidons les professionnels
                    à sélectionner une solution cohérente avec le bâtiment, l’usage
                    et les contraintes réelles du chantier.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('devis', ['famille' => 'climatisation']) }}">
                        <span>Demander un devis</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#architectures">
                        <span>Comparer les systèmes</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <ul class="ax-chips" aria-label="Environnements couverts">
                    <li><span>01</span> Habitat</li>
                    <li><span>02</span> Commerce</li>
                    <li><span>03</span> Petit tertiaire</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/home/climatisation.webp') }}"
                    alt="Unité intérieure de climatisation murale"
                    width="832"
                    height="1248"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge" aria-label="Plage de confort indicative">
                    <span>Confort maîtrisé</span>
                    <strong>18—26°</strong>
                    <small>Selon la saison et l’usage</small>
                </div>

                <figcaption><span>01</span> Confort thermique</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. DÉFINIR LE BESOIN
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" aria-labelledby="besoin-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Définir le besoin</p>
                    <h2 id="besoin-title">
                        La bonne solution commence
                        <span>par les bonnes questions.</span>
                    </h2>
                </div>

                <p>Une sélection guidée par le besoin, pas par une référence choisie au hasard.</p>
            </div>

            <div class="ax-prose">
                <p>
                    Deux espaces de même surface ne demandent pas forcément la même
                    réponse. Orientation, occupation, isolation, niveau sonore et
                    implantation modifient le choix du système.
                </p>
                <p>
                    Notre équipe vous aide à cadrer ces paramètres pour comparer des
                    équipements réellement adaptés et préparer une commande cohérente.
                </p>
            </div>

            <dl class="ax-criteria">
                <div><dt>Volume</dt><dd>Puissance et déperditions</dd></div>
                <div><dt>Implantation</dt><dd>Unités et liaisons</dd></div>
                <div><dt>Acoustique</dt><dd>Confort des occupants</dd></div>
                <div><dt>Usage</dt><dd>Rythme et zones de vie</dd></div>
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
                    <p class="ax-kicker">02 — Choisir le système</p>
                    <h2 id="architectures-title">
                        Une configuration
                        <span>pour chaque contrainte.</span>
                    </h2>
                </div>

                <div class="ax-head__aside">
                    <p>
                        Nous mettons en regard le nombre de zones, l’intégration souhaitée
                        et l’usage du bâtiment afin d’orienter la sélection.
                    </p>

                    <a class="ax-link" href="{{ route('contact') }}">
                        Demander un conseil technique <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>

            <div class="ax-tiles">
                @foreach ([
                    ['type' => 'Une zone', 'title' => 'Mono-split', 'text' => 'Une unité intérieure reliée à une unité extérieure pour traiter un espace ciblé.', 'tags' => ['Pièce principale', 'Petit commerce']],
                    ['type' => 'Plusieurs zones', 'title' => 'Multi-split', 'text' => 'Plusieurs unités intérieures pour gérer indépendamment différents espaces.', 'tags' => ['Maison', 'Cabinet']],
                    ['type' => 'Diffusion large', 'title' => 'Cassette & plafonnier', 'text' => 'Une diffusion homogène adaptée aux volumes ouverts et aux locaux professionnels.', 'tags' => ['Retail', 'Restauration']],
                    ['type' => 'Intégration discrète', 'title' => 'Gainable', 'text' => 'Une solution intégrée au bâti pour préserver les lignes et le confort visuel.', 'tags' => ['Résidentiel premium', 'Bureaux']],
                ] as $system)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <div>
                            <p class="ax-tile__type">{{ $system['type'] }}</p>
                            <h3>{{ $system['title'] }}</h3>
                            <p>{{ $system['text'] }}</p>
                        </div>

                        <ul class="ax-tags">
                            @foreach ($system['tags'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        03. ACCOMPAGNEMENT
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="accompagnement-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">03 — Notre accompagnement</p>
                    <h2 id="accompagnement-title">
                        Un projet fluide,
                        <span>du besoin au suivi.</span>
                    </h2>
                </div>
            </div>

            <ol class="ax-steps">
                <li><span>01</span><h3>Cadrer</h3><p>Usage, volumes, contraintes techniques et attentes du client final.</p></li>
                <li><span>02</span><h3>Sélectionner</h3><p>Architecture, gammes et références cohérentes avec le projet.</p></li>
                <li><span>03</span><h3>Approvisionner</h3><p>Disponibilité du matériel et préparation de la commande.</p></li>
                <li><span>04</span><h3>Accompagner</h3><p>Un interlocuteur local pour le conseil technique et le SAV.</p></li>
            </ol>

        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Un projet en préparation ?</p>

            <h2 id="final-title">
                Parlons de votre chantier
                <span>avant de parler référence.</span>
            </h2>

            <p class="ax-final__text">
                Décrivez-nous le bâtiment, les zones à traiter et vos contraintes.
                Notre équipe vous aide à poser une première direction.
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
