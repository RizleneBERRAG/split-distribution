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

            <div class="tert-hero__heading">
                <p class="tert-label"><span>04</span> Solutions tertiaires</p>

                <div class="tert-hero__title">
                    <p class="tert-kicker"><span aria-hidden="true"></span> Penser le système dans son ensemble</p>
                    <h1>Le confort change <em>d’échelle.</em></h1>
                </div>

                <div class="tert-hero__intro">
                    <p>
                        Pour un bureau, un commerce ou un local d’activité, le bon équipement
                        commence par une lecture juste du bâtiment, de ses usages et de son rythme.
                    </p>
                    <a href="{{ route('contact') }}">Étudier mon projet <span aria-hidden="true">↗</span></a>
                </div>
            </div>

            <figure class="tert-hero__visual">
                <img
                    src="{{ asset('images/solutions/tertiaire-local-technique-premium.webp') }}"
                    alt="Local technique CVC contemporain dans un bâtiment tertiaire"
                    width="1672"
                    height="941"
                    fetchpriority="high"
                    decoding="async"
                >

                <figcaption>
                    <div>
                        <span>Local technique</span>
                        <strong>Une architecture maîtrisée.</strong>
                    </div>
                    <p>Production · distribution · régulation</p>
                </figcaption>

                <div class="tert-hero__number" aria-hidden="true">
                    <span>Tertiaire</span>
                    <strong>04</strong>
                </div>
            </figure>

            <dl class="tert-hero__rail" aria-label="Principes d’une solution tertiaire cohérente">
                <div><dt>01</dt><dd>Comprendre l’usage</dd></div>
                <div><dt>02</dt><dd>Dimensionner la réponse</dd></div>
                <div><dt>03</dt><dd>Intégrer les équipements</dd></div>
                <div><dt>04</dt><dd>Préparer l’exploitation</dd></div>
            </dl>
        </div>
    </section>

    <section class="tert-reading" id="lecture-batiment">
        <div class="container tert-reading__grid">
            <header>
                <p class="tert-label"><span>01</span> Lire le bâtiment</p>
                <p class="tert-kicker"><span aria-hidden="true"></span> Avant le matériel</p>
                <h2>Tout part de <em>la réalité du lieu.</em></h2>
                <p class="tert-reading__intro">
                    Deux surfaces identiques peuvent demander des réponses très différentes.
                    Nous mettons les données du projet en regard avant de parler référence.
                </p>
            </header>

            <ol class="tert-reading__list">
                <li>
                    <span>01</span>
                    <div><strong>Usage</strong><small>Fonction du lieu et horaires</small></div>
                    <p>Occupation, activité et niveau de confort attendu structurent le besoin.</p>
                </li>
                <li>
                    <span>02</span>
                    <div><strong>Charges</strong><small>Volume et enveloppe</small></div>
                    <p>Apports, déperditions et exposition orientent la puissance nécessaire.</p>
                </li>
                <li>
                    <span>03</span>
                    <div><strong>Implantation</strong><small>Technique et acoustique</small></div>
                    <p>Place disponible, réseaux, accès et voisinage encadrent l’intégration.</p>
                </li>
                <li>
                    <span>04</span>
                    <div><strong>Pilotage</strong><small>Zonage et régulation</small></div>
                    <p>La solution doit rester simple à exploiter et adaptée aux rythmes réels.</p>
                </li>
            </ol>
        </div>
    </section>

    <section class="tert-systems" id="architectures-tertiaires">
        <div class="container">
            <header class="tert-systems__heading">
                <p class="tert-label tert-label--light"><span>02</span> Les architectures</p>
                <div>
                    <p class="tert-kicker tert-kicker--light"><span aria-hidden="true"></span> Choisir une logique de système</p>
                    <h2>Une réponse technique, <em>jamais automatique.</em></h2>
                </div>
                <p>
                    Nous comparons les familles d’équipements selon la puissance,
                    la diffusion attendue et les contraintes propres au projet.
                </p>
            </header>

            <div class="tert-systems__list">
                <article>
                    <span>01</span>
                    <div><small>Toiture &amp; grand volume</small><h3>Rooftop</h3></div>
                    <p>Une unité compacte pour traiter et diffuser l’air dans des volumes professionnels.</p>
                    <strong>Commerce · activité</strong>
                </article>
                <article>
                    <span>02</span>
                    <div><small>Modularité &amp; zonage</small><h3>DRV / VRV</h3></div>
                    <p>Une réponse souple pour gérer plusieurs espaces et différents rythmes d’occupation.</p>
                    <strong>Bureaux · hôtellerie</strong>
                </article>
                <article>
                    <span>03</span>
                    <div><small>Production centralisée</small><h3>Groupe d’eau glacée</h3></div>
                    <p>Une production à associer aux émetteurs et au schéma hydraulique du bâtiment.</p>
                    <strong>Ensembles tertiaires</strong>
                </article>
                <article>
                    <span>04</span>
                    <div><small>Débits &amp; qualité d’air</small><h3>CTA</h3></div>
                    <p>Une configuration liée aux besoins de renouvellement, de filtration et de confort.</p>
                    <strong>Traitement de l’air</strong>
                </article>
            </div>
        </div>
    </section>

    <section class="tert-contexts">
        <div class="container tert-contexts__grid">
            <div class="tert-contexts__statement">
                <p class="tert-label"><span>03</span> Les usages</p>
                <p class="tert-kicker"><span aria-hidden="true"></span> Le bâtiment est vivant</p>
                <h2>Le système suit <em>le rythme des lieux.</em></h2>
            </div>

            <div class="tert-contexts__items">
                <article><span>01</span><h3>Bureaux</h3><p>Confort acoustique et occupation variable.</p></article>
                <article><span>02</span><h3>Commerces</h3><p>Amplitude horaire et apports changeants.</p></article>
                <article><span>03</span><h3>Hôtellerie</h3><p>Discrétion et confort individualisé.</p></article>
                <article><span>04</span><h3>Locaux d’activité</h3><p>Robustesse et contraintes de process.</p></article>
            </div>
        </div>
    </section>

    <section class="tert-support">
        <div class="container tert-support__grid">
            <div>
                <p class="tert-label"><span>04</span> Notre accompagnement</p>
                <p class="tert-kicker"><span aria-hidden="true"></span> Du besoin à la commande</p>
                <h2>Mettons le bâtiment <em>au centre du choix.</em></h2>
            </div>

            <div class="tert-support__action">
                <p>
                    Partagez les plans, les usages et les premières contraintes.
                    Notre équipe vous aide à identifier une architecture et des références cohérentes.
                </p>
                <a href="{{ route('contact') }}">Parler du projet <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
@endsection
