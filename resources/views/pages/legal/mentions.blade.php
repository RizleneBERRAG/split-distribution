@extends('layouts.app')

@section('title', 'Mentions légales | Split Distribution')

@section(
    'description',
    'Mentions légales du site Split Distribution, distributeur de solutions CVC et énergies à Saint-Priest.'
)

@push('styles')
    @vite('resources/css/pages/legal.css')
@endpush

@section('body-class', 'page-legal')

@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero ax-page-hero--text legal-hero" aria-labelledby="page-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid legal-hero__grid">

            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Mentions légales</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Informations du site
                </p>

                <h1 class="ax-page-hero__title" id="page-title">Mentions <span>légales.</span></h1>
            </div>

            <div class="legal-hero__note">
                <p class="ax-page-hero__lead">
                    Les informations qui permettent d’identifier l’éditeur et le cadre d’utilisation du site.
                </p>

                <ul class="ax-chips">
                    <li><span>Document 01</span></li>
                    <li>Dernière mise à jour : septembre 2026</li>
                </ul>
            </div>

        </div>

    </section>



    {{-- =========================================================
        ARTICLES
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift legal-body" aria-labelledby="legal-summary-title">
        <div class="ax-container legal-layout">

            <aside class="legal-aside">

                <div class="legal-summary">
                    <p class="legal-summary__label" id="legal-summary-title">Informations de l’éditeur</p>
                    <strong>L’identité juridique de Split Distribution et le cadre d’utilisation du site.</strong>
                    <a href="{{ route('contact') }}">Contacter Split Distribution <span aria-hidden="true">↗</span></a>
                </div>

                <nav class="legal-toc" aria-labelledby="page-title">
                    <ol>
                        <li><a href="#editeur"><span>01</span> Éditeur du site</a></li>
                        <li><a href="#direction"><span>02</span> Direction de la publication</a></li>
                        <li><a href="#hebergement"><span>03</span> Hébergement</a></li>
                        <li><a href="#propriete"><span>04</span> Propriété intellectuelle</a></li>
                        <li><a href="#responsabilite"><span>05</span> Responsabilité</a></li>
                        <li><a href="#donnees"><span>06</span> Données personnelles</a></li>
                    </ol>
                </nav>

            </aside>

            <div class="legal-articles">

                <article class="legal-article" id="editeur" aria-labelledby="editeur-title" data-ax-fade>
                    <span class="legal-article__number">01</span>
                    <div class="legal-article__body">
                        <h2 id="editeur-title">Éditeur du site</h2>
                        <p><strong>SPLIT DISTRIBUTION</strong><br>Société par actions simplifiée (SAS) au capital social de 130 000 €<br>Bâtiment E, Veellage de Parilly<br>50 rue Jean Zay<br>69800 Saint-Priest – France</p>
                        <p>SIREN : 824 080 782<br>SIRET du siège : 824 080 782 00066<br>Immatriculée au RCS de Lyon sous le numéro 824 080 782<br>Numéro de TVA intracommunautaire : FR60 824080782</p>
                        <p>Téléphone : <a href="tel:+33472230140">04 72 23 01 40</a><br>Adresse électronique : <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a></p>
                    </div>
                </article>

                <article class="legal-article" id="direction" aria-labelledby="direction-title" data-ax-fade>
                    <span class="legal-article__number">02</span>
                    <div class="legal-article__body">
                        <h2 id="direction-title">Direction de la publication</h2>
                        <p>Le directeur de la publication est <strong>Hicham Tahri</strong>, en sa qualité de président de SPLIT DISTRIBUTION.</p>
                    </div>
                </article>

                <article class="legal-article" id="hebergement" aria-labelledby="hebergement-title" data-ax-fade>
                    <span class="legal-article__number">03</span>
                    <div class="legal-article__body">
                        <h2 id="hebergement-title">Hébergement</h2>
                        <p>Les coordonnées de l’hébergeur définitif — nom ou dénomination sociale, adresse et numéro de téléphone — seront publiées dès que l’infrastructure de production aura été arrêtée.</p>
                        <div class="legal-pending">Information en attente du choix de l’hébergement définitif.</div>
                    </div>
                </article>

                <article class="legal-article" id="propriete" aria-labelledby="propriete-title" data-ax-fade>
                    <span class="legal-article__number">04</span>
                    <div class="legal-article__body">
                        <h2 id="propriete-title">Propriété intellectuelle</h2>
                        <p>L’ensemble des contenus présents sur ce site, notamment les textes, éléments graphiques, photographies, logos et composants visuels, est protégé par la législation applicable. Toute reproduction ou adaptation, totale ou partielle, nécessite une autorisation préalable, sauf exception prévue par la loi.</p>
                    </div>
                </article>

                <article class="legal-article" id="responsabilite" aria-labelledby="responsabilite-title" data-ax-fade>
                    <span class="legal-article__number">05</span>
                    <div class="legal-article__body">
                        <h2 id="responsabilite-title">Responsabilité</h2>
                        <p>Split Distribution veille à fournir des informations utiles et à jour. Ces contenus restent généraux et ne remplacent pas une étude technique adaptée au bâtiment, à l’usage et aux contraintes du chantier. L’utilisateur reste responsable de l’usage qu’il fait des informations disponibles.</p>
                    </div>
                </article>

                <article class="legal-article" id="donnees" aria-labelledby="donnees-title" data-ax-fade>
                    <span class="legal-article__number">06</span>
                    <div class="legal-article__body">
                        <h2 id="donnees-title">Données personnelles</h2>
                        <p>Les modalités de traitement des demandes et l’exercice de vos droits sont détaillés dans notre <a href="{{ route('legal.privacy') }}">politique de confidentialité</a>.</p>
                    </div>
                </article>

            </div>

        </div>
    </section>

@endsection
