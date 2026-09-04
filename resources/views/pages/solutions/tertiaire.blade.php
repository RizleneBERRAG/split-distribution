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
                <div class="tert-section-index"><span>04</span> Solutions tertiaires</div>

                <div>
                    <p class="tert-kicker"><span aria-hidden="true"></span> Voir plus large que l’équipement</p>
                    <h1>Penser à l’échelle <em>du bâtiment.</em></h1>
                </div>

                <div class="tert-hero__intro">
                    <p>
                        Bureaux, commerces ou locaux d’activité : nous aidons les professionnels
                        à mettre en cohérence les usages, les volumes et l’architecture CVC du projet.
                    </p>
                    <a href="{{ route('contact') }}">Étudier mon projet <span aria-hidden="true">↗</span></a>
                </div>
            </div>

            <div class="tert-hero__dossier">
                <figure class="tert-hero__media">
                    <img
                        src="{{ asset('images/home/tertiaire.webp') }}"
                        alt="Local technique d’une installation CVC tertiaire"
                        width="638"
                        height="480"
                        fetchpriority="high"
                        decoding="async"
                    >
                    <figcaption><span>Projet 04</span> Installation technique</figcaption>
                </figure>

                <aside class="tert-hero__sheet" aria-label="Périmètre d’étude">
                    <div class="tert-hero__sheet-top">
                        <span>Dossier bâtiment</span>
                        <strong>CVC</strong>
                    </div>

                    <div class="tert-hero__sheet-main">
                        <small>Notre point de départ</small>
                        <h2>Comprendre l’exploitation.</h2>
                        <p>Avant de comparer une référence, nous regardons ce que le bâtiment doit réellement assurer.</p>
                    </div>

                    <dl>
                        <div><dt>01</dt><dd>Usage</dd></div>
                        <div><dt>02</dt><dd>Puissance</dd></div>
                        <div><dt>03</dt><dd>Implantation</dd></div>
                        <div><dt>04</dt><dd>Régulation</dd></div>
                    </dl>
                </aside>

                <div class="tert-hero__stamp" aria-hidden="true">
                    <span>Échelle</span>
                    <strong>BÂT.</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="tert-reading" id="lecture-batiment">
        <div class="container">
            <header class="tert-reading__heading">
                <div class="tert-section-index tert-section-index--light"><span>01</span> Lire le bâtiment</div>
                <div>
                    <p class="tert-kicker tert-kicker--light"><span aria-hidden="true"></span> Le besoin avant le produit</p>
                    <h2>Quatre données. <em>Une seule cohérence.</em></h2>
                </div>
                <p>
                    Un projet tertiaire se dimensionne dans son ensemble. Chaque choix influe
                    sur le confort, l’exploitation et la manière d’intégrer les équipements.
                </p>
            </header>

            <ol class="tert-reading__matrix">
                <li>
                    <span>01 / Programme</span>
                    <strong>Usage</strong>
                    <p>Fonction du lieu, horaires d’ouverture et niveau de confort attendu.</p>
                    <small>Bureaux · commerce · activité</small>
                </li>
                <li>
                    <span>02 / Enveloppe</span>
                    <strong>Charges</strong>
                    <p>Volumes, apports, déperditions et variations d’occupation.</p>
                    <small>Puissance · saison · exposition</small>
                </li>
                <li>
                    <span>03 / Architecture</span>
                    <strong>Implantation</strong>
                    <p>Locaux techniques, distribution, accès et contraintes acoustiques.</p>
                    <small>Place · réseau · voisinage</small>
                </li>
                <li>
                    <span>04 / Exploitation</span>
                    <strong>Pilotage</strong>
                    <p>Zonage, régulation et simplicité d’usage pour les occupants.</p>
                    <small>Zones · consignes · suivi</small>
                </li>
            </ol>
        </div>
    </section>

    <section class="tert-architectures" id="architectures-tertiaires">
        <div class="container tert-architectures__layout">
            <header>
                <div class="tert-section-index"><span>02</span> Les architectures</div>
                <p class="tert-kicker"><span aria-hidden="true"></span> Une réponse selon le projet</p>
                <h2>Pas une recette. <em>Une architecture adaptée.</em></h2>
                <p>
                    Nous comparons les familles d’équipements en fonction de la puissance,
                    de la diffusion souhaitée et des contraintes propres au site.
                </p>
                <a href="{{ route('contact') }}">Comparer les solutions <span aria-hidden="true">↗</span></a>
            </header>

            <div class="tert-architectures__cards">
                <article class="tert-architecture tert-architecture--lead">
                    <div class="tert-architecture__meta"><span>01</span><small>Système direct</small></div>
                    <div>
                        <p>Toiture &amp; grand volume</p>
                        <h3>Rooftop</h3>
                    </div>
                    <footer>
                        <p>Une unité compacte pour traiter et diffuser l’air dans des volumes professionnels.</p>
                        <span>Commerce · activité</span>
                    </footer>
                </article>

                <article class="tert-architecture">
                    <div class="tert-architecture__meta"><span>02</span><small>Zonage</small></div>
                    <div>
                        <p>Débit de réfrigérant variable</p>
                        <h3>DRV / VRV</h3>
                    </div>
                    <footer>
                        <p>Une réponse modulable pour gérer plusieurs espaces et rythmes d’occupation.</p>
                        <span>Bureaux · hôtellerie</span>
                    </footer>
                </article>

                <article class="tert-architecture">
                    <div class="tert-architecture__meta"><span>03</span><small>Réseau hydraulique</small></div>
                    <div>
                        <p>Production centralisée</p>
                        <h3>Groupe d’eau glacée</h3>
                    </div>
                    <footer>
                        <p>Une production d’eau tempérée à associer aux émetteurs et au schéma hydraulique du projet.</p>
                        <span>Ensembles tertiaires</span>
                    </footer>
                </article>

                <article class="tert-architecture tert-architecture--accent">
                    <div class="tert-architecture__meta"><span>04</span><small>Traitement d’air</small></div>
                    <div>
                        <p>Débits &amp; qualité d’air</p>
                        <h3>CTA</h3>
                    </div>
                    <footer>
                        <p>Une solution à configurer selon les besoins de renouvellement, filtration et confort.</p>
                        <span>Débits · filtration</span>
                    </footer>
                </article>
            </div>
        </div>
    </section>

    <section class="tert-contexts">
        <div class="container">
            <header class="tert-contexts__heading">
                <div class="tert-section-index"><span>03</span> Les contextes</div>
                <div>
                    <p class="tert-kicker"><span aria-hidden="true"></span> Même technique, réalités différentes</p>
                    <h2>Chaque bâtiment impose <em>son propre rythme.</em></h2>
                </div>
            </header>

            <div class="tert-contexts__list">
                <article>
                    <span>01</span>
                    <h3>Bureaux</h3>
                    <p>Zonage, variation d’occupation et confort acoustique au quotidien.</p>
                    <small>TRAVAILLER</small>
                </article>
                <article>
                    <span>02</span>
                    <h3>Commerces</h3>
                    <p>Apports variables, amplitude horaire et traitement de grands volumes.</p>
                    <small>ACCUEILLIR</small>
                </article>
                <article>
                    <span>03</span>
                    <h3>Hôtellerie</h3>
                    <p>Confort individualisé, discrétion des équipements et disponibilité.</p>
                    <small>RECEVOIR</small>
                </article>
                <article>
                    <span>04</span>
                    <h3>Locaux d’activité</h3>
                    <p>Robustesse, accès technique et réponse adaptée au process du site.</p>
                    <small>PRODUIRE</small>
                </article>
            </div>
        </div>
    </section>

    <section class="tert-support">
        <div class="container tert-support__grid">
            <div>
                <div class="tert-section-index tert-section-index--light"><span>04</span> Notre accompagnement</div>
                <p class="tert-kicker tert-kicker--light"><span aria-hidden="true"></span> Du schéma à la commande</p>
                <h2>Un projet lisible. <em>Une sélection défendable.</em></h2>
            </div>

            <div class="tert-support__aside">
                <p>
                    Partagez les plans, les usages et les premières contraintes du projet.
                    Nous vous aidons à identifier les familles de solutions et les références cohérentes.
                </p>
                <a href="{{ route('contact') }}">Parler du bâtiment <span aria-hidden="true">↗</span></a>
                <dl>
                    <div><dt>01</dt><dd>Cadrer</dd></div>
                    <div><dt>02</dt><dd>Comparer</dd></div>
                    <div><dt>03</dt><dd>Approvisionner</dd></div>
                </dl>
            </div>
        </div>
    </section>
@endsection
