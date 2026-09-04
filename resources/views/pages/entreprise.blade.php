@extends('layouts.app')

@section('title', 'L’entreprise | Split Distribution')

@section(
    'description',
    'Découvrez Split Distribution, distributeur CVC à Saint-Priest : conseil technique, disponibilité du matériel et accompagnement des professionnels.'
)

@push('styles')
    @vite('resources/css/pages/entreprise.css')
@endpush

@section('body-class', 'page-entreprise')

@section('content')
    <section class="company-hero">
        <div class="company-hero__grid">
            <div class="company-hero__content">
                <nav class="company-breadcrumb" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span>L’entreprise</span>
                </nav>

                <div class="company-hero__copy">
                    <p class="company-eyebrow"><span aria-hidden="true"></span> Split Distribution · Saint-Priest</p>
                    <h1>Des réponses claires.<br><em>Des projets qui avancent.</em></h1>
                    <p>
                        Un distributeur CVC proche du terrain, capable de vous accompagner
                        du premier choix technique jusqu’au suivi du matériel.
                    </p>

                    <div class="company-hero__actions">
                        <a href="{{ route('contact') }}" class="company-button company-button--green">
                            Parler de mon projet <span aria-hidden="true">↗</span>
                        </a>
                        <a href="tel:+33472230140" class="company-button company-button--outline">
                            04 72 23 01 40
                        </a>
                    </div>
                </div>
            </div>

            <figure class="company-hero__visual">
                <img
                    src="{{ asset('images/entreprise/team-work.webp') }}"
                    alt="Échange technique entre professionnels dans un espace dédié au matériel CVC"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                >
                <figcaption>
                    <span>Une équipe accessible</span>
                    <strong>Pour des décisions plus simples.</strong>
                </figcaption>
            </figure>
        </div>

        <div class="company-hero__rail">
            <div><span>01</span><strong>Basés à Saint-Priest</strong></div>
            <div><span>02</span><strong>Dédiés aux professionnels</strong></div>
            <div><span>03</span><strong>Présents du choix au SAV</strong></div>
        </div>
    </section>

    <section class="company-intro">
        <div class="container">
            <div class="company-intro__heading">
                <p class="company-index"><span>01</span> Qui sommes-nous ?</p>
                <div>
                    <p class="company-eyebrow company-eyebrow--dark"><span aria-hidden="true"></span> Un partenaire de proximité</p>
                    <h2>Le bon matériel compte.<br><em>Le conseil autour aussi.</em></h2>
                </div>
                <p class="company-intro__lead">
                    Split Distribution accompagne les professionnels de la climatisation,
                    du chauffage et de la ventilation avec une approche simple : comprendre
                    le chantier avant de proposer une référence.
                </p>
            </div>

            <div class="company-intro__body">
                <article class="company-pillar">
                    <span>01</span>
                    <h3>Écouter</h3>
                    <p>Identifier l’usage, les contraintes du bâtiment et les attentes du client final.</p>
                </article>
                <article class="company-pillar">
                    <span>02</span>
                    <h3>Sélectionner</h3>
                    <p>Comparer les solutions et construire un ensemble réellement cohérent.</p>
                </article>
                <article class="company-pillar">
                    <span>03</span>
                    <h3>Rester présent</h3>
                    <p>Répondre aux questions avant, pendant et après la mise à disposition du matériel.</p>
                </article>

                <aside class="company-address">
                    <span class="company-address__number" aria-hidden="true">69</span>
                    <small>Notre point d’ancrage</small>
                    <strong>Saint-Priest</strong>
                    <p>50 rue Jean Zay<br>69800 Saint-Priest</p>
                    <a href="{{ route('contact') }}">Nous rencontrer <span aria-hidden="true">↗</span></a>
                </aside>
            </div>
        </div>
    </section>

    <section class="company-method">
        <div class="container">
            <div class="company-method__heading">
                <div>
                    <p class="company-index company-index--light"><span>02</span> Notre façon de travailler</p>
                    <h2>Un seul interlocuteur.<br><em>Une vision d’ensemble.</em></h2>
                </div>
                <p>
                    Notre valeur se mesure dans les moments où il faut décider,
                    vérifier ou trouver une réponse rapidement.
                </p>
            </div>

            <div class="company-method__steps">
                <article>
                    <div class="company-method__top"><span>Avant</span><small>01</small></div>
                    <h3>Cadrer le besoin</h3>
                    <p>Comprendre le projet et poser les bonnes questions avant de parler matériel.</p>
                    <ul>
                        <li>Usage et volumes</li>
                        <li>Contraintes techniques</li>
                        <li>Délais du chantier</li>
                    </ul>
                </article>
                <article class="company-method__steps--active">
                    <div class="company-method__top"><span>Pendant</span><small>02</small></div>
                    <h3>Sécuriser le choix</h3>
                    <p>Sélectionner, vérifier la cohérence et préparer une commande exploitable.</p>
                    <ul>
                        <li>Architecture adaptée</li>
                        <li>Disponibilité du matériel</li>
                        <li>Préparation précise</li>
                    </ul>
                </article>
                <article>
                    <div class="company-method__top"><span>Après</span><small>03</small></div>
                    <h3>Garder le contact</h3>
                    <p>Rester disponible lorsque le projet passe du comptoir à la réalité du terrain.</p>
                    <ul>
                        <li>Questions techniques</li>
                        <li>Suivi de la commande</li>
                        <li>Orientation SAV</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="company-contact">
        <div class="container company-contact__grid">
            <div class="company-contact__place">
                <p class="company-index"><span>03</span> Nous trouver</p>
                <h2>À Saint-Priest,<br><em>près de vos projets.</em></h2>
                <p>50 rue Jean Zay · 69800 Saint-Priest</p>
            </div>

            <div class="company-contact__action">
                <p>
                    Besoin de vérifier une solution ou de préparer un chantier ?
                    Décrivez-nous le contexte, nous reprendrons les choses concrètement.
                </p>
                <a href="{{ route('contact') }}">
                    Échanger avec l’équipe <span aria-hidden="true">↗</span>
                </a>
                <a href="tel:+33472230140" class="company-contact__phone">04 72 23 01 40</a>
            </div>
        </div>
    </section>
@endsection
