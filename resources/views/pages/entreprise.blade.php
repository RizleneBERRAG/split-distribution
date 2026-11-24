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


@php
    $piliers = [
        ['title' => 'Écouter', 'text' => 'Identifier l’usage, les contraintes du bâtiment et les attentes du client final.'],
        ['title' => 'Sélectionner', 'text' => 'Comparer les solutions et construire un ensemble réellement cohérent.'],
        ['title' => 'Rester présent', 'text' => 'Répondre aux questions avant, pendant et après la mise à disposition du matériel.'],
    ];

    $phases = [
        [
            'moment' => 'Avant',
            'title' => 'Cadrer le besoin',
            'text' => 'Comprendre le projet et poser les bonnes questions avant de parler matériel.',
            'tags' => ['Usage et volumes', 'Contraintes techniques', 'Délais du chantier'],
        ],
        [
            'moment' => 'Pendant',
            'title' => 'Sécuriser le choix',
            'text' => 'Sélectionner, vérifier la cohérence et préparer une commande exploitable.',
            'tags' => ['Architecture adaptée', 'Disponibilité du matériel', 'Préparation précise'],
        ],
        [
            'moment' => 'Après',
            'title' => 'Garder le contact',
            'text' => 'Rester disponible lorsque le projet passe du comptoir à la réalité du terrain.',
            'tags' => ['Questions techniques', 'Suivi de la commande', 'Orientation SAV'],
        ],
    ];
@endphp


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
                    <span aria-current="page">L’entreprise</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Split Distribution · Saint-Priest
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Des réponses claires.
                    <span>Des projets qui avancent.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Un distributeur CVC proche du terrain, capable de vous accompagner
                    du premier choix technique jusqu’au suivi du matériel.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('contact') }}">
                        <span>Parler de mon projet</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="tel:+33472230140">
                        <span>04 72 23 01 40</span>
                    </a>
                </div>

                <ul class="ax-chips" aria-label="Split Distribution en bref">
                    <li><span aria-hidden="true">01</span> Basés à Saint-Priest</li>
                    <li><span aria-hidden="true">02</span> Dédiés aux professionnels</li>
                    <li><span aria-hidden="true">03</span> Présents du choix au SAV</li>
                </ul>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/entreprise/team-work.webp') }}"
                    alt="Échange technique entre professionnels dans un espace dédié au matériel CVC"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <figcaption><span>Une équipe accessible</span> Pour des décisions plus simples.</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. QUI SOMMES-NOUS ?
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" aria-labelledby="qui-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Qui sommes-nous ?</p>
                    <h2 id="qui-title">
                        Le bon matériel compte.
                        <span>Le conseil autour aussi.</span>
                    </h2>
                </div>

                <p>Un partenaire de proximité</p>
            </div>

            <p class="ax-lead-text" data-ax-words>
                Split Distribution accompagne les professionnels de la climatisation,
                du chauffage et de la ventilation avec une approche simple : comprendre
                le chantier avant de proposer une référence.
            </p>

            <div class="ax-tiles ax-tiles--4 company-pillars">
                @foreach ($piliers as $pilier)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <div>
                            <h3>{{ $pilier['title'] }}</h3>
                            <p>{{ $pilier['text'] }}</p>
                        </div>
                    </article>
                @endforeach

                <article class="ax-tile company-place">
                    <span class="ax-tile__number" aria-hidden="true">69</span>

                    <div>
                        <p class="ax-tile__type">Notre point d’ancrage</p>
                        <h3>Saint-Priest</h3>
                        <p>50 rue Jean Zay<br>69800 Saint-Priest</p>
                    </div>

                    <a class="ax-link" href="{{ route('contact') }}">
                        Nous rencontrer <span aria-hidden="true">↗</span>
                    </a>
                </article>
            </div>

        </div>
    </section>



    {{-- =========================================================
        02. NOTRE FAÇON DE TRAVAILLER
    ========================================================== --}}

    <section class="ax-section ax-section--dark" aria-labelledby="facon-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">02 — Notre façon de travailler</p>
                    <h2 id="facon-title">
                        Un seul interlocuteur.
                        <span>Une vision d’ensemble.</span>
                    </h2>
                </div>

                <p>
                    Notre valeur se mesure dans les moments où il faut décider,
                    vérifier ou trouver une réponse rapidement.
                </p>
            </div>

            <ol class="ax-steps">
                @foreach ($phases as $phase)
                    <li>
                        <span><span aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} — </span>{{ $phase['moment'] }}</span>
                        <h3>{{ $phase['title'] }}</h3>
                        <p>{{ $phase['text'] }}</p>

                        <ul class="ax-tags">
                            @foreach ($phase['tags'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>

        </div>
    </section>



    {{-- =========================================================
        03. NOUS TROUVER — APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">03 — Nous trouver</p>

            <h2 id="final-title">
                À Saint-Priest,
                <span>près de vos projets.</span>
            </h2>

            <p class="ax-final__text">
                Besoin de vérifier une solution ou de préparer un chantier ?
                Décrivez-nous le contexte, nous reprendrons les choses concrètement.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Échanger avec l’équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>

                <p class="ax-eyebrow company-address">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    50 rue Jean Zay · 69800 Saint-Priest
                </p>
            </div>
        </div>

    </section>

@endsection
