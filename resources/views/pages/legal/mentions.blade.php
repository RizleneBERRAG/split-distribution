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
                <p>À compléter avant la mise en production</p>
                <strong>Identité juridique, directeur de publication et hébergeur définitif.</strong>
                <a href="{{ route('contact') }}">Contacter Split Distribution <span aria-hidden="true">↗</span></a>
            </aside>

            <div class="legal-sections">
                <article id="editeur">
                    <span>01</span>
                    <div>
                        <h2>Éditeur du site</h2>
                        <p><strong>Split Distribution</strong><br>50 rue Jean Zay<br>69800 Saint-Priest<br>France</p>
                        <p>Téléphone : <a href="tel:+33472230140">04 72 23 01 40</a><br>Contact : <a href="{{ route('contact') }}">formulaire de contact</a></p>
                        <div class="legal-pending">
                            À renseigner : dénomination sociale complète, forme juridique, capital social,
                            numéro SIREN/SIRET, RCS et numéro de TVA intracommunautaire.
                        </div>
                    </div>
                </article>

                <article>
                    <span>02</span>
                    <div>
                        <h2>Direction de la publication</h2>
                        <p>Le nom du directeur ou de la directrice de la publication doit être renseigné avant la mise en production du site.</p>
                    </div>
                </article>

                <article>
                    <span>03</span>
                    <div>
                        <h2>Hébergement</h2>
                        <p>Les coordonnées de l’hébergeur définitif — nom, raison sociale, adresse et numéro de téléphone — seront indiquées après le choix de l’infrastructure de production.</p>
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
