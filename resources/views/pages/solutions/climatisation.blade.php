@extends('layouts.app')

@section('title', 'Climatisation professionnelle | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de solutions de climatisation pour le résidentiel, les commerces et le petit tertiaire.'
)

@push('styles')
    @vite('resources/css/pages/climatisation.css')
@endpush

@section('body-class', 'page-climatisation')

@section('content')
    <section class="clim-hero">
        <div class="container clim-hero__shell">
            <nav class="clim-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Climatisation</span>
            </nav>

            <div class="clim-hero__grid">
                <div class="clim-hero__content">
                    <p class="clim-kicker">
                        <span aria-hidden="true"></span>
                        Climatisation professionnelle
                    </p>

                    <h1>Le confort, <span>dimensionné avec précision.</span></h1>

                    <p class="clim-hero__intro">
                        Du mono-split au système gainable, nous aidons les professionnels
                        à sélectionner une solution cohérente avec le bâtiment, l’usage
                        et les contraintes réelles du chantier.
                    </p>

                    <div class="clim-hero__actions">
                        <a href="{{ route('contact') }}" class="button button--primary">
                            Étudier mon projet <span aria-hidden="true">↗</span>
                        </a>
                        <a href="#architectures" class="clim-text-link">
                            Comparer les systèmes <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>

                <div class="clim-hero__visual">
                    <div class="clim-hero__image-wrap">
                        <img
                            src="{{ asset('images/home/climatisation.webp') }}"
                            alt="Unité intérieure de climatisation murale"
                            width="832"
                            height="1248"
                            fetchpriority="high"
                            decoding="async"
                        >
                        <p class="clim-hero__caption"><span>01</span> Confort thermique</p>
                    </div>

                    <div class="clim-temperature" aria-label="Plage de confort indicative">
                        <span>Confort maîtrisé</span>
                        <strong>18—26°</strong>
                        <small>Selon la saison et l’usage</small>
                    </div>

                    <div class="clim-hero__note">
                        <span aria-hidden="true"></span>
                        <p>Une sélection guidée par le besoin, pas par une référence choisie au hasard.</p>
                    </div>
                </div>
            </div>

            <div class="clim-hero__contexts" aria-label="Environnements couverts">
                <p>Pour chaque environnement</p>
                <ul>
                    <li><span>01</span> Habitat</li>
                    <li><span>02</span> Commerce</li>
                    <li><span>03</span> Petit tertiaire</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="clim-definition">
        <div class="container clim-definition__grid">
            <div class="clim-section-label"><span>01</span> Définir le besoin</div>

            <div class="clim-definition__body">
                <p class="clim-kicker clim-kicker--dark">
                    <span aria-hidden="true"></span> Avant le matériel
                </p>
                <h2>La bonne solution commence <em>par les bonnes questions.</em></h2>

                <div class="clim-definition__copy">
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

                <dl class="clim-criteria">
                    <div><dt>Volume</dt><dd>Puissance et déperditions</dd></div>
                    <div><dt>Implantation</dt><dd>Unités et liaisons</dd></div>
                    <div><dt>Acoustique</dt><dd>Confort des occupants</dd></div>
                    <div><dt>Usage</dt><dd>Rythme et zones de vie</dd></div>
                </dl>
            </div>
        </div>
    </section>

    <section class="clim-architectures" id="architectures">
        <div class="container clim-architectures__grid">
            <header class="clim-architectures__header">
                <div class="clim-section-label clim-section-label--dark">
                    <span>02</span> Choisir le système
                </div>
                <p class="clim-kicker clim-kicker--light">
                    <span aria-hidden="true"></span> Les architectures
                </p>
                <h2>Une configuration pour chaque contrainte.</h2>
                <p>
                    Nous mettons en regard le nombre de zones, l’intégration souhaitée
                    et l’usage du bâtiment afin d’orienter la sélection.
                </p>
                <a href="{{ route('contact') }}" class="clim-outline-link">
                    Demander un conseil technique <span aria-hidden="true">↗</span>
                </a>
            </header>

            <div class="clim-system-list">
                <article class="clim-system">
                    <span class="clim-system__number">01</span>
                    <div>
                        <p class="clim-system__type">Une zone</p>
                        <h3>Mono-split</h3>
                        <p>Une unité intérieure reliée à une unité extérieure pour traiter un espace ciblé.</p>
                    </div>
                    <ul><li>Pièce principale</li><li>Petit commerce</li></ul>
                </article>

                <article class="clim-system">
                    <span class="clim-system__number">02</span>
                    <div>
                        <p class="clim-system__type">Plusieurs zones</p>
                        <h3>Multi-split</h3>
                        <p>Plusieurs unités intérieures pour gérer indépendamment différents espaces.</p>
                    </div>
                    <ul><li>Maison</li><li>Cabinet</li></ul>
                </article>

                <article class="clim-system">
                    <span class="clim-system__number">03</span>
                    <div>
                        <p class="clim-system__type">Diffusion large</p>
                        <h3>Cassette &amp; plafonnier</h3>
                        <p>Une diffusion homogène adaptée aux volumes ouverts et aux locaux professionnels.</p>
                    </div>
                    <ul><li>Retail</li><li>Restauration</li></ul>
                </article>

                <article class="clim-system">
                    <span class="clim-system__number">04</span>
                    <div>
                        <p class="clim-system__type">Intégration discrète</p>
                        <h3>Gainable</h3>
                        <p>Une solution intégrée au bâti pour préserver les lignes et le confort visuel.</p>
                    </div>
                    <ul><li>Résidentiel premium</li><li>Bureaux</li></ul>
                </article>
            </div>
        </div>
    </section>

    <section class="clim-support">
        <div class="container">
            <div class="clim-support__heading">
                <div class="clim-section-label"><span>03</span> Notre accompagnement</div>
                <h2>Un projet fluide, <span>du besoin au suivi.</span></h2>
            </div>

            <ol class="clim-support__steps">
                <li><span>01</span><h3>Cadrer</h3><p>Usage, volumes, contraintes techniques et attentes du client final.</p></li>
                <li><span>02</span><h3>Sélectionner</h3><p>Architecture, gammes et références cohérentes avec le projet.</p></li>
                <li><span>03</span><h3>Approvisionner</h3><p>Disponibilité du matériel et préparation de la commande.</p></li>
                <li><span>04</span><h3>Accompagner</h3><p>Un interlocuteur local pour le conseil technique et le SAV.</p></li>
            </ol>
        </div>
    </section>

    <section class="clim-cta">
        <div class="container clim-cta__grid">
            <div>
                <p class="clim-kicker clim-kicker--dark">
                    <span aria-hidden="true"></span> Un projet en préparation ?
                </p>
                <h2>Parlons de votre chantier avant de parler référence.</h2>
            </div>

            <div class="clim-cta__action">
                <p>
                    Décrivez-nous le bâtiment, les zones à traiter et vos contraintes.
                    Notre équipe vous aide à poser une première direction.
                </p>
                <a href="{{ route('contact') }}" class="clim-cta__button">
                    Échanger avec l’équipe <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>
@endsection
