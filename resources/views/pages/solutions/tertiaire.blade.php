@extends('layouts.app')

@section('title', 'Solutions CVC tertiaires | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans la sélection de solutions CVC adaptées aux bâtiments tertiaires, commerces, bureaux et locaux d’activité.'
)

@push('styles')
    @vite('resources/css/pages/tertiaire.css')
@endpush

@section('body-class', 'page-tertiaire')

@section('content')
    <section class="tert-hero">
        <div class="container">
            <nav class="tert-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Tertiaire</span>
            </nav>

            <div class="tert-hero__grid">
                <div class="tert-hero__content">
                    <p class="tert-kicker"><span aria-hidden="true"></span> Solutions tertiaires</p>
                    <h1>Un bâtiment.<br>Plusieurs <em>rythmes.</em></h1>
                    <p class="tert-hero__lead">
                        Nous aidons les professionnels à relier volumes, usages et contraintes
                        pour construire une réponse CVC cohérente à l’échelle du projet.
                    </p>
                    <div class="tert-hero__actions">
                        <a href="{{ route('contact') }}">Parler du bâtiment <span aria-hidden="true">↗</span></a>
                        <a href="#lecture" class="tert-hero__discover">Découvrir l’approche <span aria-hidden="true">↓</span></a>
                    </div>
                </div>

                <div class="tert-building" aria-label="Représentation des différents usages d’un bâtiment tertiaire">
                    <div class="tert-building__top">
                        <span>Lecture active</span>
                        <strong>04</strong>
                    </div>

                    <div class="tert-building__floors">
                        <article style="--level: 78%; --delay: -1.2s;">
                            <span>04</span>
                            <div><small>Niveau</small><strong>Bureaux</strong></div>
                            <i aria-hidden="true"></i>
                            <em>08:00—19:00</em>
                        </article>
                        <article style="--level: 54%; --delay: -3.4s;">
                            <span>03</span>
                            <div><small>Niveau</small><strong>Accueil</strong></div>
                            <i aria-hidden="true"></i>
                            <em>Variable</em>
                        </article>
                        <article style="--level: 91%; --delay: -2.1s;">
                            <span>02</span>
                            <div><small>Niveau</small><strong>Commerce</strong></div>
                            <i aria-hidden="true"></i>
                            <em>10:00—20:00</em>
                        </article>
                        <article style="--level: 66%; --delay: -4.6s;">
                            <span>01</span>
                            <div><small>Niveau</small><strong>Technique</strong></div>
                            <i aria-hidden="true"></i>
                            <em>Continu</em>
                        </article>
                    </div>

                    <div class="tert-building__base">
                        <div><span>Confort</span><strong>Zone par zone</strong></div>
                        <div><span>Système</span><strong>Un seul ensemble</strong></div>
                    </div>
                </div>
            </div>

            <div class="tert-hero__foot">
                <span>Rooftop</span><span>DRV / VRV</span><span>Eau glacée</span><span>Traitement d’air</span>
            </div>
        </div>
    </section>

    <section class="tert-reading" id="lecture">
        <div class="container">
            <header class="tert-reading__heading">
                <p class="tert-index"><span>01</span> La lecture du projet</p>
                <div>
                    <p class="tert-kicker tert-kicker--dark"><span aria-hidden="true"></span> Avant le matériel</p>
                    <h2>La bonne solution ne commence pas <em>par une référence.</em></h2>
                </div>
            </header>

            <div class="tert-reading__path">
                <article>
                    <span>01</span>
                    <div><strong>Observer</strong><small>Le lieu</small></div>
                    <p>Volumes, enveloppe, accès et contraintes d’implantation.</p>
                </article>
                <article>
                    <span>02</span>
                    <div><strong>Comprendre</strong><small>Les usages</small></div>
                    <p>Occupation, horaires, activité et confort réellement attendu.</p>
                </article>
                <article>
                    <span>03</span>
                    <div><strong>Composer</strong><small>Le système</small></div>
                    <p>Production, diffusion, régulation et accessoires cohérents.</p>
                </article>
                <article>
                    <span>04</span>
                    <div><strong>Anticiper</strong><small>L’exploitation</small></div>
                    <p>Simplicité de pilotage, disponibilité et évolution du besoin.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="tert-systems" id="architectures">
        <div class="container">
            <header class="tert-systems__heading">
                <p class="tert-index tert-index--light"><span>02</span> Les architectures</p>
                <div>
                    <p class="tert-kicker tert-kicker--light"><span aria-hidden="true"></span> Une logique pour chaque contexte</p>
                    <h2>Quatre familles.<br><em>Aucune recette.</em></h2>
                </div>
                <p>
                    La puissance ne suffit pas à décider. Diffusion, zonage,
                    réseau disponible et exploitation orientent l’architecture.
                </p>
            </header>

            <div class="tert-systems__stage">
                <article>
                    <span class="tert-systems__letter" aria-hidden="true">R</span>
                    <small>01 · Grand volume</small>
                    <h3>Rooftop</h3>
                    <p>Une unité compacte en toiture pour traiter les volumes professionnels.</p>
                    <strong>Commerce · activité</strong>
                </article>
                <article>
                    <span class="tert-systems__letter" aria-hidden="true">D</span>
                    <small>02 · Multi-zone</small>
                    <h3>DRV / VRV</h3>
                    <p>Une réponse modulable pour gérer plusieurs espaces indépendamment.</p>
                    <strong>Bureaux · hôtellerie</strong>
                </article>
                <article>
                    <span class="tert-systems__letter" aria-hidden="true">E</span>
                    <small>03 · Hydraulique</small>
                    <h3>Eau glacée</h3>
                    <p>Une production centralisée à coordonner avec le réseau et les émetteurs.</p>
                    <strong>Ensemble tertiaire</strong>
                </article>
                <article>
                    <span class="tert-systems__letter" aria-hidden="true">A</span>
                    <small>04 · Qualité d’air</small>
                    <h3>CTA</h3>
                    <p>Une configuration dédiée aux débits, à la filtration et au confort.</p>
                    <strong>Traitement d’air</strong>
                </article>
            </div>
        </div>
    </section>

    <section class="tert-uses">
        <div class="container tert-uses__grid">
            <header>
                <p class="tert-index"><span>03</span> Les réalités terrain</p>
                <p class="tert-kicker tert-kicker--dark"><span aria-hidden="true"></span> Un système qui suit la vie du lieu</p>
                <h2>Le bâtiment n’est jamais <em>immobile.</em></h2>
            </header>

            <div class="tert-uses__orbit">
                <div class="tert-uses__core">
                    <span>Projet</span>
                    <strong>Cohérent</strong>
                </div>
                <article class="tert-uses__item tert-uses__item--one"><span>01</span><strong>Bureaux</strong><small>Occupation variable</small></article>
                <article class="tert-uses__item tert-uses__item--two"><span>02</span><strong>Commerces</strong><small>Forte amplitude</small></article>
                <article class="tert-uses__item tert-uses__item--three"><span>03</span><strong>Hôtellerie</strong><small>Confort individuel</small></article>
                <article class="tert-uses__item tert-uses__item--four"><span>04</span><strong>Activité</strong><small>Contraintes métier</small></article>
            </div>
        </div>
    </section>

    <section class="tert-cta">
        <div class="container tert-cta__grid">
            <div>
                <p class="tert-index"><span>04</span> Construire la réponse</p>
                <h2>Commençons par comprendre <em>votre bâtiment.</em></h2>
            </div>
            <div>
                <p>
                    Plans, usages, puissances envisagées ou simples contraintes de chantier :
                    partagez-nous les premières données du projet.
                </p>
                <a href="{{ route('contact') }}">Échanger avec l’équipe <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
@endsection
