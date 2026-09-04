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

@section('content')
    <section class="services-hero">
        <div class="container">
            <nav class="services-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>Services</span>
            </nav>

            <div class="services-hero__heading">
                <div>
                    <p class="services-kicker"><span aria-hidden="true"></span> Services aux professionnels</p>
                    <h1>Plus qu’un fournisseur.<br><em>Un appui à chaque étape.</em></h1>
                </div>

                <div class="services-hero__summary">
                    <p>
                        De la première question à l’après-vente, nous vous aidons
                        à sécuriser vos choix, votre commande et l’avancement du chantier.
                    </p>

                    <div class="services-hero__actions">
                        <a href="{{ route('contact') }}" class="services-button services-button--green">
                            Parler de mon projet <span aria-hidden="true">↗</span>
                        </a>
                        <a href="#methode" class="services-button services-button--text">
                            Découvrir notre méthode <span aria-hidden="true">↓</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="services-stage">
                <figure class="services-stage__image">
                    <img
                        src="{{ asset('images/services/order-preparation.webp') }}"
                        alt="Préparation d’une commande de matériel CVC dans un entrepôt"
                        width="1536"
                        height="1024"
                        fetchpriority="high"
                    >
                    <figcaption><span>En action</span> Préparation d’une commande CVC</figcaption>
                </figure>

                <div class="services-stage__count">
                    <span>Notre accompagnement</span>
                    <strong>04</strong>
                    <p>services reliés par un même interlocuteur.</p>
                </div>

                <div class="services-stage__carousel" aria-label="Les quatre étapes de notre accompagnement">
                    <div class="services-stage__carousel-track">
                        <div class="services-stage__carousel-set">
                            <a href="#methode"><span>01</span><strong>Étudier</strong><small>Comprendre le besoin</small></a>
                            <a href="#methode"><span>02</span><strong>Sélectionner</strong><small>Choisir la solution</small></a>
                            <a href="#methode"><span>03</span><strong>Préparer</strong><small>Organiser la commande</small></a>
                            <a href="#methode"><span>04</span><strong>Accompagner</strong><small>Rester disponible</small></a>
                        </div>

                        <div class="services-stage__carousel-set" aria-hidden="true">
                            <a href="#methode" tabindex="-1"><span>01</span><strong>Étudier</strong><small>Comprendre le besoin</small></a>
                            <a href="#methode" tabindex="-1"><span>02</span><strong>Sélectionner</strong><small>Choisir la solution</small></a>
                            <a href="#methode" tabindex="-1"><span>03</span><strong>Préparer</strong><small>Organiser la commande</small></a>
                            <a href="#methode" tabindex="-1"><span>04</span><strong>Accompagner</strong><small>Rester disponible</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-method" id="methode">
        <div class="container">
            <div class="services-method__heading">
                <p class="services-section-index"><span>01</span> Notre méthode</p>
                <div>
                    <h2>Un projet bien cadré <em>avance mieux.</em></h2>
                    <p>
                        Chaque étape répond à une question concrète du chantier.
                        Vous savez ce qui est choisi, pourquoi et comment la suite est organisée.
                    </p>
                </div>
            </div>

            <div class="services-method__steps">
                <article>
                    <div class="services-method__number">01</div>
                    <span class="services-method__eyebrow">Avant le matériel</span>
                    <h3>Comprendre</h3>
                    <p>Usage, volumes, contraintes techniques, délais et attentes du client final.</p>
                    <small>Un besoin clairement défini</small>
                </article>

                <article>
                    <div class="services-method__number">02</div>
                    <span class="services-method__eyebrow">Faire le bon choix</span>
                    <h3>Conseiller</h3>
                    <p>Comparaison des architectures, gammes et références adaptées au projet.</p>
                    <small>Une sélection cohérente</small>
                </article>

                <article>
                    <div class="services-method__number">03</div>
                    <span class="services-method__eyebrow">Passer à l’action</span>
                    <h3>Préparer</h3>
                    <p>Vérification des disponibilités et organisation d’une commande complète.</p>
                    <small>Du matériel prêt à partir</small>
                </article>

                <article>
                    <div class="services-method__number">04</div>
                    <span class="services-method__eyebrow">Rester disponible</span>
                    <h3>Suivre</h3>
                    <p>Un interlocuteur local pour la livraison, les questions techniques et le SAV.</p>
                    <small>Une continuité après la commande</small>
                </article>
            </div>
        </div>
    </section>

    <section class="services-offer">
        <div class="container">
            <div class="services-offer__heading">
                <div>
                    <p class="services-section-index services-section-index--dark"><span>02</span> Nos services</p>
                    <h2>Des réponses utiles, <em>au bon moment.</em></h2>
                </div>
                <p>
                    Notre rôle ne se limite pas à fournir une référence. Nous facilitons
                    les décisions et les opérations qui entourent votre commande.
                </p>
            </div>

            <div class="services-offer__grid">
                <article class="services-card services-card--advice">
                    <div class="services-card__top">
                        <span>01</span>
                        <small>Expertise</small>
                    </div>
                    <h3>Conseil technique</h3>
                    <p>
                        Lecture du besoin, comparaison des solutions et orientation
                        vers un ensemble cohérent avec l’usage du bâtiment.
                    </p>
                    <ul>
                        <li>Définition du besoin</li>
                        <li>Choix de l’architecture</li>
                        <li>Cohérence des équipements</li>
                    </ul>
                </article>

                <article class="services-card services-card--stock">
                    <div class="services-card__top">
                        <span>02</span>
                        <small>Disponibilité</small>
                    </div>
                    <h3>Stock &amp; préparation</h3>
                    <p>
                        Visibilité sur le matériel disponible et préparation soignée
                        pour limiter les oublis au moment du départ.
                    </p>
                    <ul>
                        <li>Disponibilité locale</li>
                        <li>Contrôle de la commande</li>
                        <li>Enlèvement organisé</li>
                    </ul>
                </article>

                <article class="services-card services-card--delivery">
                    <div class="services-card__top">
                        <span>03</span>
                        <small>Logistique</small>
                    </div>
                    <h3>Livraison adaptée</h3>
                    <p>
                        Une organisation logistique pensée autour de vos contraintes,
                        de votre planning et du lieu de destination.
                    </p>
                    <ul>
                        <li>Chantier ou entreprise</li>
                        <li>Coordination du départ</li>
                        <li>Suivi de la livraison</li>
                    </ul>
                </article>

                <article class="services-card services-card--support">
                    <div class="services-card__top">
                        <span>04</span>
                        <small>Continuité</small>
                    </div>
                    <h3>Suivi &amp; SAV</h3>
                    <p>
                        Une équipe identifiable reste disponible lorsque le matériel
                        est livré et que le chantier entre dans sa phase concrète.
                    </p>
                    <ul>
                        <li>Interlocuteur local</li>
                        <li>Questions après livraison</li>
                        <li>Orientation SAV</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="services-cta">
        <div class="container services-cta__inner">
            <div>
                <p class="services-kicker"><span aria-hidden="true"></span> Un chantier à préparer ?</p>
                <h2>Commençons par votre besoin.</h2>
            </div>
            <div>
                <p>
                    Décrivez-nous le bâtiment, les équipements recherchés
                    et vos contraintes. Nous vous aiderons à poser la première direction.
                </p>
                <a href="{{ route('contact') }}">
                    Échanger avec l’équipe <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>
@endsection
