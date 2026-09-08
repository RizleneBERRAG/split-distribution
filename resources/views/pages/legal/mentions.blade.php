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
    <header class="legal-hero">
        <div class="container legal-hero__inner">
            <nav class="legal-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Mentions légales</span>
            </nav>

            <div class="legal-hero__layout">
                <div>
                    <p class="legal-kicker"><span></span> Informations du site</p>
                    <h1>Mentions<br><em>légales.</em></h1>
                </div>

                <div class="legal-hero__note">
                    <span>Document 01</span>
                    <p>Les informations qui permettent d’identifier l’éditeur et le cadre d’utilisation du site.</p>
                    <small>Dernière mise à jour : septembre 2026</small>
                </div>
            </div>
        </div>
    </header>

    <section class="legal-content">
        <div class="container legal-content__layout">
            <aside class="legal-summary">
                <p>Informations de l’éditeur</p>
                <strong>L’identité juridique de Split Distribution et le cadre d’utilisation du site.</strong>
                <a href="{{ route('contact') }}">Contacter Split Distribution <span aria-hidden="true">↗</span></a>
            </aside>

            <div class="legal-sections">
                <article id="editeur">
                    <span>01</span>
                    <div>
                        <h2>Éditeur du site</h2>
                        <p><strong>SPLIT DISTRIBUTION</strong><br>Société par actions simplifiée (SAS) au capital social de 130 000 €<br>Bâtiment E, Veellage de Parilly<br>50 rue Jean Zay<br>69800 Saint-Priest – France</p>
                        <p>SIREN : 824 080 782<br>SIRET du siège : 824 080 782 00066<br>Immatriculée au RCS de Lyon sous le numéro 824 080 782<br>Numéro de TVA intracommunautaire : FR60 824080782</p>
                        <p>Téléphone : <a href="tel:+33472230140">04 72 23 01 40</a><br>Adresse électronique : <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a></p>
                    </div>
                </article>

                <article>
                    <span>02</span>
                    <div>
                        <h2>Direction de la publication</h2>
                        <p>Le directeur de la publication est <strong>Hicham Tahri</strong>, en sa qualité de président de SPLIT DISTRIBUTION.</p>
                    </div>
                </article>

                <article>
                    <span>03</span>
                    <div>
                        <h2>Hébergement</h2>
                        <p>Les coordonnées de l’hébergeur définitif — nom ou dénomination sociale, adresse et numéro de téléphone — seront publiées dès que l’infrastructure de production aura été arrêtée.</p>
                        <div class="legal-pending">Information en attente du choix de l’hébergement définitif.</div>
                    </div>
                </article>

                <article>
                    <span>04</span>
                    <div>
                        <h2>Propriété intellectuelle</h2>
                        <p>L’ensemble des contenus présents sur ce site, notamment les textes, éléments graphiques, photographies, logos et composants visuels, est protégé par la législation applicable. Toute reproduction ou adaptation, totale ou partielle, nécessite une autorisation préalable, sauf exception prévue par la loi.</p>
                    </div>
                </article>

                <article>
                    <span>05</span>
                    <div>
                        <h2>Responsabilité</h2>
                        <p>Split Distribution veille à fournir des informations utiles et à jour. Ces contenus restent généraux et ne remplacent pas une étude technique adaptée au bâtiment, à l’usage et aux contraintes du chantier. L’utilisateur reste responsable de l’usage qu’il fait des informations disponibles.</p>
                    </div>
                </article>

                <article>
                    <span>06</span>
                    <div>
                        <h2>Données personnelles</h2>
                        <p>Les modalités de traitement des demandes et l’exercice de vos droits sont détaillés dans notre <a href="{{ route('legal.privacy') }}">politique de confidentialité</a>.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
