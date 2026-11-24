@extends('layouts.app')


@section('title', 'Énergies renouvelables & photovoltaïque | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans la sélection de solutions photovoltaïques cohérentes avec le bâtiment, les usages et les objectifs énergétiques.'
)

@section('body-class', 'page-energies')


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
                    <span aria-current="page">Énergies renouvelables</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Production locale
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    L’énergie est déjà là.
                    <span>Capturons-la.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Du potentiel de la toiture au pilotage de l’installation, nous aidons
                    à composer une réponse photovoltaïque lisible, dimensionnée et durable.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('devis', ['famille' => 'energies-renouvelables']) }}">
                        <span>Demander un devis</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#trajectoire">
                        <span>Voir la trajectoire</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <ul class="ax-chips">
                    <li><span>01</span> Photovoltaïque</li>
                    <li><span>02</span> Micro-onduleurs</li>
                    <li><span>03</span> Stockage</li>
                    <li><span>04</span> Pilotage</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/home/energies.webp') }}"
                    alt="Panneaux photovoltaïques éclairés par le soleil"
                    width="992"
                    height="1504"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge">
                    <span>Flux actif</span>
                    <strong><span data-count="100">100</span>%</strong>
                    <small>Énergie disponible</small>
                </div>

                <figcaption><span>Source</span> Solaire</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. LA TRAJECTOIRE
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" id="trajectoire" aria-labelledby="trajectoire-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">01 — La trajectoire · Du rayon à l’usage</p>
                    <h2 id="trajectoire-title">
                        Une chaîne simple.
                        <span>Une cohérence complète.</span>
                    </h2>
                </div>
            </div>

            <ol class="ax-steps" aria-label="Parcours de l’énergie, de la toiture aux usages">
                <li>
                    <span>01 · Surface utile</span>
                    <h3>Capter</h3>
                    <p>Lire l’orientation, l’ombrage et la surface réellement exploitable.</p>
                </li>
                <li>
                    <span>02 · Courant produit</span>
                    <h3>Convertir</h3>
                    <p>Associer modules et conversion pour une architecture cohérente.</p>
                </li>
                <li>
                    <span>03 · Énergie disponible</span>
                    <h3>Distribuer</h3>
                    <p>Relier la production au bâtiment, à ses équipements et à son réseau.</p>
                </li>
                <li>
                    <span>04 · Vision durable</span>
                    <h3>Piloter</h3>
                    <p>Suivre la production et garder une lecture claire de l’installation.</p>
                </li>
            </ol>

            <dl class="ax-criteria" aria-label="Lecture du projet">
                <div><dt>Toiture</dt><dd>Exposition · surface</dd></div>
                <div><dt>Production</dt><dd>Puissance · rendement</dd></div>
                <div><dt>Usages</dt><dd>Profil · autoconsommation</dd></div>
            </dl>

        </div>
    </section>



    {{-- =========================================================
        02. LE JUSTE ÉQUILIBRE
    ========================================================== --}}

    <section class="ax-section ax-section--dark" aria-labelledby="equilibre-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">02 — Le juste équilibre · Dimensionner avant d’additionner</p>
                    <h2 id="equilibre-title">
                        Produire beaucoup ne veut pas toujours dire
                        <span>produire juste.</span>
                    </h2>
                </div>

                <p>
                    Le bon ensemble met en regard potentiel du site, profil de consommation,
                    matériel et évolution future du besoin.
                </p>
            </div>

            <ul class="ax-tiles ax-tiles--4" aria-label="Les quatre paramètres d’un projet photovoltaïque cohérent">
                @foreach ([
                    ['title' => 'Bâtiment', 'tag' => 'Toiture & implantation'],
                    ['title' => 'Usage', 'tag' => 'Consommation réelle'],
                    ['title' => 'Matériel', 'tag' => 'Ensemble compatible'],
                    ['title' => 'Évolution', 'tag' => 'Besoin à venir'],
                ] as $parameter)
                    <li class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <h3>{{ $parameter['title'] }}</h3>

                        <ul class="ax-tags">
                            <li>{{ $parameter['tag'] }}</li>
                        </ul>
                    </li>
                @endforeach
            </ul>

            <ul class="ax-chips" data-ax-fade>
                <li><span>Projet</span> Aligné</li>
            </ul>

        </div>
    </section>



    {{-- =========================================================
        03. L'ENSEMBLE TECHNIQUE
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="ensemble-title">
        <div class="ax-container">

            <div class="ax-head ax-head--single">
                <div>
                    <p class="ax-kicker">03 — L’ensemble technique · Chaque élément a sa place</p>
                    <h2 id="ensemble-title">
                        Pas une collection de produits.
                        <span>Un système.</span>
                    </h2>
                </div>
            </div>

            <div class="ax-tiles">
                @foreach ([
                    ['type' => 'La surface active', 'title' => 'Modules', 'text' => 'Technologie, puissance, format et intégration adaptés à la toiture.'],
                    ['type' => 'Le cœur électrique', 'title' => 'Conversion', 'text' => 'Onduleur ou micro-onduleurs choisis selon l’architecture du projet.'],
                    ['type' => 'La continuité', 'title' => 'Protection', 'text' => 'Coffrets et composants pour compléter une installation maîtrisée.'],
                    ['type' => 'La visibilité', 'title' => 'Supervision', 'text' => 'Une lecture accessible de la production et du fonctionnement.'],
                ] as $component)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <div>
                            <p class="ax-tile__type">{{ $component['type'] }}</p>
                            <h3>{{ $component['title'] }}</h3>
                            <p>{{ $component['text'] }}</p>
                        </div>
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
            <p class="ax-kicker">04 — Passer au concret</p>

            <h2 id="final-title">
                Commençons par le potentiel de
                <span>votre projet.</span>
            </h2>

            <p class="ax-final__text">
                Une toiture, un besoin ou une première étude :
                transmettez-nous les éléments disponibles.
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
