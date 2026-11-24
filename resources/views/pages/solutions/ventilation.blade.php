@extends('layouts.app')


@section('title', 'Ventilation professionnelle | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de solutions de ventilation adaptées aux logements, commerces et bâtiments tertiaires.'
)

@section('body-class', 'page-ventilation')


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
                    <span aria-current="page">Ventilation</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Qualité de l’air intérieur
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Faire circuler
                    <span>ce qui ne se voit pas.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Renouveler l’air, évacuer l’humidité et maîtriser les débits :
                    nous aidons les professionnels à construire une réponse cohérente
                    avec le bâtiment et ses usages.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('contact') }}">
                        <span>Étudier mon besoin</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#solutions-ventilation">
                        <span>Voir les solutions</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <ul class="ax-chips" aria-label="Bénéfices de la ventilation">
                    <li><span>01</span> Air renouvelé</li>
                    <li><span>02</span> Humidité maîtrisée</li>
                    <li><span>03</span> Confort acoustique</li>
                    <li><span>04</span> Débits adaptés</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/home/ventilation.webp') }}"
                    alt="Système de diffusion d’air intégré au plafond de bureaux"
                    width="735"
                    height="554"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge">
                    <span>Le bon équilibre</span>
                    <strong>Air neuf</strong>
                    <small>Entrées, extraction et diffusion coordonnées</small>
                </div>

                <figcaption><span>03</span> Renouvellement maîtrisé</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. LE PARCOURS DE L'AIR
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" id="parcours-air" aria-labelledby="parcours-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Le parcours de l’air</p>
                    <h2 id="parcours-title">
                        L’air entre, circule
                        <span>et ressort proprement.</span>
                    </h2>
                </div>

                <p>
                    Une ventilation efficace ne repose pas sur un seul appareil.
                    Elle dépend d’un parcours complet, dimensionné et équilibré.
                </p>
            </div>

            <ol class="ax-steps" aria-label="Un mouvement continu">
                <li><span>01</span><h3>Capter</h3><p>Introduire l’air neuf par les points prévus.</p></li>
                <li><span>02</span><h3>Distribuer</h3><p>Organiser la circulation entre les espaces.</p></li>
                <li><span>03</span><h3>Extraire</h3><p>Évacuer l’air vicié et l’humidité produite.</p></li>
                <li><span>04</span><h3>Renouveler</h3><p>Maintenir un cycle adapté à l’occupation.</p></li>
            </ol>

        </div>
    </section>



    {{-- =========================================================
        02. LES ARCHITECTURES
    ========================================================== --}}

    <section class="ax-section ax-section--dark" id="solutions-ventilation" aria-labelledby="architectures-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">02 — Les architectures</p>
                    <h2 id="architectures-title">
                        Le bon réseau,
                        <span>au bon rythme.</span>
                    </h2>
                </div>

                <p>
                    Volume, occupation, niveau de performance et contraintes de passage
                    orientent le choix du système et de ses composants.
                </p>
            </div>

            <div class="ax-tiles ax-tiles--3">
                @foreach ([
                    ['type' => 'Extraction maîtrisée', 'title' => 'Simple flux', 'text' => 'Une solution directe pour renouveler l’air et extraire l’humidité des pièces techniques.', 'tags' => ['Résidentiel & petit tertiaire', 'Autoréglable', 'Hygroréglable', 'Réseau compact']],
                    ['type' => 'Air extrait valorisé', 'title' => 'Double flux', 'text' => 'Un échange entre air neuf et air extrait pour renforcer la maîtrise du confort.', 'tags' => ['Performance', 'Récupération', 'Filtration']],
                    ['type' => 'Débits organisés', 'title' => 'Extraction & réseaux', 'text' => 'Caissons, gaines et accessoires coordonnés pour les locaux aux besoins plus soutenus.', 'tags' => ['Volumes professionnels', 'Commerces', 'Bureaux', 'Locaux techniques']],
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
        03. BIEN DIMENSIONNER
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="dimensionner-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">03 — Bien dimensionner</p>
                    <h2 id="dimensionner-title">
                        Un débit juste.
                        <span>Ni trop, ni trop peu.</span>
                    </h2>
                </div>

                <p>L’équilibre avant l’équipement</p>
            </div>

            <div class="ax-prose">
                <p>
                    Nous mettons en regard les volumes, le nombre d’occupants,
                    les pièces à traiter et les contraintes du réseau avant d’orienter la sélection.
                </p>
            </div>

            <dl class="ax-criteria" aria-label="Les quatre paramètres de sélection">
                <div><dt>Volume</dt><dd>Espaces à renouveler</dd></div>
                <div><dt>Occupation</dt><dd>Rythme et usages</dd></div>
                <div><dt>Réseau</dt><dd>Longueurs et passages</dd></div>
                <div><dt>Acoustique</dt><dd>Niveau sonore attendu</dd></div>
            </dl>

        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Un projet à faire respirer ?</p>

            <h2 id="final-title">
                Commençons par
                <span>le parcours de l’air.</span>
            </h2>

            <p class="ax-final__text">
                Décrivez-nous les locaux, leur occupation et les contraintes du chantier.
                Notre équipe vous aidera à poser une première architecture.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Parler à l’équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
