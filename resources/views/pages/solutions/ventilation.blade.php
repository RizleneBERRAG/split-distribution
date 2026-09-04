@extends('layouts.app')

@section('title', 'Ventilation professionnelle | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de solutions de ventilation adaptées aux logements, commerces et bâtiments tertiaires.'
)

@push('styles')
    @vite('resources/css/pages/ventilation.css')
@endpush

@section('body-class', 'page-ventilation')

@section('content')
    <section class="vent-hero">
        <div class="container">
            <nav class="vent-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Ventilation</span>
            </nav>

            <div class="vent-hero__grid">
                <div class="vent-hero__content">
                    <p class="vent-kicker"><span aria-hidden="true"></span> Qualité de l’air intérieur</p>
                    <h1>Faire circuler <em>ce qui ne se voit pas.</em></h1>
                    <p class="vent-hero__intro">
                        Renouveler l’air, évacuer l’humidité et maîtriser les débits :
                        nous aidons les professionnels à construire une réponse cohérente
                        avec le bâtiment et ses usages.
                    </p>

                    <div class="vent-hero__actions">
                        <a href="{{ route('contact') }}" class="vent-button vent-button--dark">
                            Étudier mon besoin <span aria-hidden="true">↗</span>
                        </a>
                        <a href="#solutions-ventilation" class="vent-text-link">
                            Voir les solutions <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>

                <div class="vent-hero__visual">
                    <figure>
                        <img
                            src="{{ asset('images/home/ventilation.webp') }}"
                            alt="Système de diffusion d’air intégré au plafond de bureaux"
                            width="735"
                            height="554"
                            fetchpriority="high"
                            decoding="async"
                        >
                        <figcaption><span>03</span> Renouvellement maîtrisé</figcaption>
                    </figure>

                    <div class="vent-hero__streams" aria-hidden="true">
                        <span></span><span></span><span></span><span></span>
                    </div>

                    <div class="vent-hero__gauge">
                        <span>Le bon équilibre</span>
                        <strong>Air neuf</strong>
                        <small>Entrées, extraction et diffusion coordonnées</small>
                    </div>

                    <div class="vent-hero__marker" aria-hidden="true">
                        <span>V</span><strong>03</strong>
                    </div>
                </div>
            </div>

            <dl class="vent-hero__rail" aria-label="Bénéfices de la ventilation">
                <div><dt>01</dt><dd>Air renouvelé</dd></div>
                <div><dt>02</dt><dd>Humidité maîtrisée</dd></div>
                <div><dt>03</dt><dd>Confort acoustique</dd></div>
                <div><dt>04</dt><dd>Débits adaptés</dd></div>
            </dl>
        </div>
    </section>

    <section class="vent-cycle" id="parcours-air">
        <div class="container vent-cycle__grid">
            <div class="vent-section-mark"><span>01</span> Le parcours de l’air</div>

            <div class="vent-cycle__content">
                <header>
                    <p class="vent-kicker vent-kicker--dark"><span aria-hidden="true"></span> Un mouvement continu</p>
                    <h2>L’air entre, circule <em>et ressort proprement.</em></h2>
                    <p>
                        Une ventilation efficace ne repose pas sur un seul appareil.
                        Elle dépend d’un parcours complet, dimensionné et équilibré.
                    </p>
                </header>

                <ol class="vent-cycle__steps">
                    <li><span>01</span><strong>Capter</strong><p>Introduire l’air neuf par les points prévus.</p></li>
                    <li><span>02</span><strong>Distribuer</strong><p>Organiser la circulation entre les espaces.</p></li>
                    <li><span>03</span><strong>Extraire</strong><p>Évacuer l’air vicié et l’humidité produite.</p></li>
                    <li><span>04</span><strong>Renouveler</strong><p>Maintenir un cycle adapté à l’occupation.</p></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="vent-systems" id="solutions-ventilation">
        <div class="container">
            <header class="vent-systems__heading">
                <div class="vent-section-mark vent-section-mark--light"><span>02</span> Les architectures</div>
                <div>
                    <p class="vent-kicker vent-kicker--light"><span aria-hidden="true"></span> Une logique pour chaque bâtiment</p>
                    <h2>Le bon réseau, <em>au bon rythme.</em></h2>
                </div>
                <p>
                    Volume, occupation, niveau de performance et contraintes de passage
                    orientent le choix du système et de ses composants.
                </p>
            </header>

            <div class="vent-systems__grid">
                <article class="vent-system vent-system--primary">
                    <div class="vent-system__top"><span>01</span><small>Résidentiel &amp; petit tertiaire</small></div>
                    <div class="vent-system__body">
                        <p>Extraction maîtrisée</p>
                        <h3>Simple flux</h3>
                        <div>
                            <p>Une solution directe pour renouveler l’air et extraire l’humidité des pièces techniques.</p>
                            <ul><li>Autoréglable</li><li>Hygroréglable</li><li>Réseau compact</li></ul>
                        </div>
                    </div>
                </article>

                <article class="vent-system vent-system--secondary">
                    <div class="vent-system__top"><span>02</span><small>Performance</small></div>
                    <div class="vent-system__body">
                        <p>Air extrait valorisé</p>
                        <h3>Double flux</h3>
                        <div>
                            <p>Un échange entre air neuf et air extrait pour renforcer la maîtrise du confort.</p>
                            <ul><li>Récupération</li><li>Filtration</li></ul>
                        </div>
                    </div>
                </article>

                <article class="vent-system vent-system--tertiary">
                    <div class="vent-system__top"><span>03</span><small>Volumes professionnels</small></div>
                    <div class="vent-system__body">
                        <p>Débits organisés</p>
                        <h3>Extraction &amp; réseaux</h3>
                        <div>
                            <p>Caissons, gaines et accessoires coordonnés pour les locaux aux besoins plus soutenus.</p>
                            <ul><li>Commerces</li><li>Bureaux</li><li>Locaux techniques</li></ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="vent-selection">
        <div class="container vent-selection__grid">
            <header>
                <div class="vent-section-mark"><span>03</span> Bien dimensionner</div>
                <p class="vent-kicker vent-kicker--dark"><span aria-hidden="true"></span> L’équilibre avant l’équipement</p>
                <h2>Un débit juste. <em>Ni trop, ni trop peu.</em></h2>
                <p>
                    Nous mettons en regard les volumes, le nombre d’occupants,
                    les pièces à traiter et les contraintes du réseau avant d’orienter la sélection.
                </p>
            </header>

            <div class="vent-selection__compass" aria-label="Les quatre paramètres de sélection">
                <div class="vent-selection__core"><span>Projet</span><strong>Équilibré</strong></div>
                <article class="vent-selection__item vent-selection__item--one"><span>01</span><strong>Volume</strong><small>Espaces à renouveler</small></article>
                <article class="vent-selection__item vent-selection__item--two"><span>02</span><strong>Occupation</strong><small>Rythme et usages</small></article>
                <article class="vent-selection__item vent-selection__item--three"><span>03</span><strong>Réseau</strong><small>Longueurs et passages</small></article>
                <article class="vent-selection__item vent-selection__item--four"><span>04</span><strong>Acoustique</strong><small>Niveau sonore attendu</small></article>
            </div>
        </div>
    </section>

    <section class="vent-cta">
        <div class="container vent-cta__grid">
            <div>
                <p class="vent-kicker vent-kicker--dark"><span aria-hidden="true"></span> Un projet à faire respirer ?</p>
                <h2>Commençons par le parcours de l’air.</h2>
            </div>
            <div class="vent-cta__action">
                <p>
                    Décrivez-nous les locaux, leur occupation et les contraintes du chantier.
                    Notre équipe vous aidera à poser une première architecture.
                </p>
                <a href="{{ route('contact') }}">Parler à l’équipe <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
@endsection
