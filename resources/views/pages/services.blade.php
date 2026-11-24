@extends('layouts.app')

@section('title', 'Services | Split Distribution')

@section(
    'description',
    'Conseil technique, sélection, préparation, livraison et SAV : découvrez l’accompagnement proposé par Split Distribution aux professionnels du CVC.'
)

@push('styles')
    @vite('resources/css/pages/services.css')
@endpush

@section('body-class', 'page-services')


@php
    $methode = [
        ['eyebrow' => 'Avant le matériel', 'title' => 'Comprendre', 'text' => 'Usage, volumes, contraintes techniques, délais et attentes du client final.', 'result' => 'Un besoin clairement défini'],
        ['eyebrow' => 'Faire le bon choix', 'title' => 'Conseiller', 'text' => 'Comparaison des architectures, gammes et références adaptées au projet.', 'result' => 'Une sélection cohérente'],
        ['eyebrow' => 'Passer à l’action', 'title' => 'Préparer', 'text' => 'Vérification des disponibilités et organisation d’une commande complète.', 'result' => 'Du matériel prêt à partir'],
        ['eyebrow' => 'Rester disponible', 'title' => 'Suivre', 'text' => 'Un interlocuteur local pour la livraison, les questions techniques et le SAV.', 'result' => 'Une continuité après la commande'],
    ];

    $etapes = [
        ['title' => 'Étudier', 'text' => 'Comprendre le besoin'],
        ['title' => 'Sélectionner', 'text' => 'Choisir la solution'],
        ['title' => 'Préparer', 'text' => 'Organiser la commande'],
        ['title' => 'Accompagner', 'text' => 'Rester disponible'],
    ];

    $services = [
        [
            'type' => 'Expertise',
            'title' => 'Conseil technique',
            'text' => 'Lecture du besoin, comparaison des solutions et orientation vers un ensemble cohérent avec l’usage du bâtiment.',
            'tags' => ['Définition du besoin', 'Choix de l’architecture', 'Cohérence des équipements'],
        ],
        [
            'type' => 'Disponibilité',
            'title' => 'Stock & préparation',
            'text' => 'Visibilité sur le matériel disponible et préparation soignée pour limiter les oublis au moment du départ.',
            'tags' => ['Disponibilité locale', 'Contrôle de la commande', 'Enlèvement organisé'],
        ],
        [
            'type' => 'Logistique',
            'title' => 'Livraison adaptée',
            'text' => 'Une organisation logistique pensée autour de vos contraintes, de votre planning et du lieu de destination.',
            'tags' => ['Chantier ou entreprise', 'Coordination du départ', 'Suivi de la livraison'],
        ],
        [
            'type' => 'Continuité',
            'title' => 'Suivi & SAV',
            'text' => 'Une équipe identifiable reste disponible lorsque le matériel est livré et que le chantier entre dans sa phase concrète.',
            'tags' => ['Interlocuteur local', 'Questions après livraison', 'Orientation SAV'],
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
                    <span aria-current="page">Services</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Services aux professionnels
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Plus qu’un fournisseur.
                    <span>Un appui à chaque étape.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    De la première question à l’après-vente, nous vous aidons
                    à sécuriser vos choix, votre commande et l’avancement du chantier.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('contact') }}">
                        <span>Parler de mon projet</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="#methode">
                        <span>Découvrir notre méthode</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/services/order-preparation.webp') }}"
                    alt="Préparation d’une commande de matériel CVC dans un entrepôt"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge">
                    <span>Notre accompagnement</span>
                    <strong>04</strong>
                    <small>services reliés par un même interlocuteur.</small>
                </div>

                <figcaption><span>En action</span> Préparation d’une commande CVC</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. NOTRE MÉTHODE
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift" id="methode" aria-labelledby="methode-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Notre méthode</p>
                    <h2 id="methode-title">
                        Un projet bien cadré
                        <span>avance mieux.</span>
                    </h2>
                </div>

                <p>
                    Chaque étape répond à une question concrète du chantier.
                    Vous savez ce qui est choisi, pourquoi et comment la suite est organisée.
                </p>
            </div>

            <ol class="ax-steps">
                @foreach ($methode as $step)
                    <li>
                        <span><span aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} — </span>{{ $step['eyebrow'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>

                        <ul class="ax-tags">
                            <li>{{ $step['result'] }}</li>
                        </ul>
                    </li>
                @endforeach
            </ol>

        </div>
    </section>



    {{-- =========================================================
        BANDEAU : LES QUATRE ÉTAPES EN CONTINU
    ========================================================== --}}

    <section class="ax-marquee" aria-label="Les quatre étapes de notre accompagnement">
        <div class="ax-marquee__track">
            @foreach ([false, true] as $copy)
                <div class="ax-marquee__group" @if ($copy) aria-hidden="true" @endif>
                    @foreach ($etapes as $etape)
                        <span>{{ $etape['title'] }}</span>
                        <i aria-hidden="true"></i>
                        <span>{{ $etape['text'] }}</span>
                        <i aria-hidden="true"></i>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>



    {{-- =========================================================
        02. NOS SERVICES
    ========================================================== --}}

    <section class="ax-section ax-section--dark" aria-labelledby="offre-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">02 — Nos services</p>
                    <h2 id="offre-title">
                        Des réponses utiles,
                        <span>au bon moment.</span>
                    </h2>
                </div>

                <p>
                    Notre rôle ne se limite pas à fournir une référence. Nous facilitons
                    les décisions et les opérations qui entourent votre commande.
                </p>
            </div>

            <div class="ax-tiles">
                @foreach ($services as $service)
                    <article class="ax-tile">
                        <span class="ax-tile__number" aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>

                        <div>
                            <p class="ax-tile__type">{{ $service['type'] }}</p>
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['text'] }}</p>
                        </div>

                        <ul class="ax-tags">
                            @foreach ($service['tags'] as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>

        </div>
    </section>



    {{-- =========================================================
        03. CEE
    ========================================================== --}}

    <section class="ax-section ax-section--white" aria-labelledby="cee-title">
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">03 — Économies d’énergie</p>
                    <h2 id="cee-title">
                        Anticiper les CEE.
                        <span>Simplifier la suite.</span>
                    </h2>
                </div>

                <p>
                    Une opération peut répondre aux critères du dispositif CEE.
                    Nous intégrons cette question en amont pour garder une sélection
                    technique cohérente et réunir les informations utiles au bon moment.
                </p>
            </div>

            <div class="ax-cee">
                <img
                    class="ax-cee__mark"
                    src="{{ asset('images/brand/cee-certificates.png') }}"
                    alt="Certificats d’économies d’énergie — CEE"
                    width="738"
                    height="240"
                    loading="lazy"
                >

                <div class="ax-cee__copy">
                    <p class="ax-kicker">Un dispositif à étudier en amont</p>

                    <ol class="ax-tags" aria-label="Les étapes de l’accompagnement CEE">
                        <li><span aria-hidden="true">01</span> Repérer</li>
                        <li><span aria-hidden="true">02</span> Vérifier</li>
                        <li><span aria-hidden="true">03</span> Préparer</li>
                    </ol>

                    <p>
                        <small>L’éligibilité et le montant éventuel dépendent de chaque opération.</small>
                    </p>
                </div>

                <a class="ax-link ax-link--dark" href="{{ route('contact') }}">
                    Échanger sur mon projet <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Un chantier à préparer ?</p>

            <h2 id="final-title">
                Commençons
                <span>par votre besoin.</span>
            </h2>

            <p class="ax-final__text">
                Décrivez-nous le bâtiment, les équipements recherchés
                et vos contraintes. Nous vous aiderons à poser la première direction.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Échanger avec l’équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
