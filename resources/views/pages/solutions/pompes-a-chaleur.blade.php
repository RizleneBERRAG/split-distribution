@extends('layouts.app')

@section('title', 'Pompes à chaleur professionnelles | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans le choix de pompes à chaleur Air/Air et Air/Eau adaptées à leurs projets.'
)

@push('styles')
    @vite('resources/css/pages/pompes-a-chaleur.css')
@endpush

@section('body-class', 'page-pac')

@section('content')
    <section class="pac-hero">
        <div class="container">
            <nav class="pac-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Pompes à chaleur</span>
            </nav>

            <div class="pac-hero__heading">
                <div>
                    <p class="pac-kicker"><span aria-hidden="true"></span> Pompes à chaleur</p>
                    <h1>La chaleur de l’air, <em>au service du bâtiment.</em></h1>
                </div>

                <div class="pac-hero__intro">
                    <p>
                        Des solutions Air/Air et Air/Eau pour répondre aux besoins de
                        chauffage, de confort d’été et, selon les équipements, d’eau chaude sanitaire.
                    </p>
                    <a href="{{ route('contact') }}" class="pac-button">
                        Étudier mon projet <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>

            <div class="pac-hero__media">
                <img
                    src="{{ asset('images/solutions/pompes-a-chaleur/hero-pac.webp') }}"
                    alt="Pompe à chaleur installée à proximité d’une maison contemporaine"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="pac-hero__badge">
                    <span>Énergie disponible</span>
                    <strong>Air extérieur</strong>
                    <small>Valorisée pour le confort intérieur</small>
                </div>

                <div class="pac-hero__index" aria-hidden="true">
                    <span>PAC</span>
                    <strong>02</strong>
                </div>
            </div>

            <dl class="pac-hero__rail">
                <div><dt>01</dt><dd>Air / Air</dd></div>
                <div><dt>02</dt><dd>Air / Eau</dd></div>
                <div><dt>03</dt><dd>Résidentiel</dd></div>
                <div><dt>04</dt><dd>Petit tertiaire</dd></div>
            </dl>
        </div>
    </section>

    <section class="pac-principle">
        <div class="container pac-principle__grid">
            <div class="pac-section-mark"><span>01</span> Le principe</div>

            <div class="pac-principle__content">
                <p class="pac-kicker pac-kicker--dark"><span aria-hidden="true"></span> Une énergie à valoriser</p>
                <h2>Prélever dehors. <em>Restituer dedans.</em></h2>

                <div class="pac-principle__flow" aria-label="Principe simplifié d’une pompe à chaleur">
                    <article>
                        <span>01</span>
                        <strong>Capter</strong>
                        <p>Les calories présentes dans l’air extérieur.</p>
                    </article>
                    <div class="pac-principle__arrow" aria-hidden="true">→</div>
                    <article>
                        <span>02</span>
                        <strong>Transformer</strong>
                        <p>L’énergie grâce au cycle thermodynamique.</p>
                    </article>
                    <div class="pac-principle__arrow" aria-hidden="true">→</div>
                    <article>
                        <span>03</span>
                        <strong>Diffuser</strong>
                        <p>La chaleur via l’air ou un circuit hydraulique.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="pac-families" id="familles">
        <div class="container">
            <header class="pac-families__heading">
                <div class="pac-section-mark pac-section-mark--light"><span>02</span> Les solutions</div>
                <div>
                    <p class="pac-kicker"><span aria-hidden="true"></span> Deux familles, deux logiques</p>
                    <h2>Choisir le bon vecteur de confort.</h2>
                </div>
            </header>

            <div class="pac-family pac-family--air">
                <div class="pac-family__number">A</div>
                <div class="pac-family__title">
                    <span>Air diffusé</span>
                    <h3>Air / Air</h3>
                </div>
                <p>
                    La chaleur est diffusée directement dans les espaces par les unités
                    intérieures. Une réponse flexible pour chauffer et rafraîchir les zones.
                </p>
                <ul>
                    <li>Mono ou multi-zone</li>
                    <li>Chauffage &amp; rafraîchissement</li>
                    <li>Résidentiel et commerces</li>
                </ul>
            </div>

            <div class="pac-family pac-family--water">
                <div class="pac-family__number">E</div>
                <div class="pac-family__title">
                    <span>Eau chauffée</span>
                    <h3>Air / Eau</h3>
                </div>
                <p>
                    Les calories alimentent un réseau hydraulique compatible avec les
                    émetteurs du projet et, selon la configuration, l’eau chaude sanitaire.
                </p>
                <ul>
                    <li>Plancher chauffant</li>
                    <li>Radiateurs compatibles</li>
                    <li>Neuf ou rénovation étudiée</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="pac-selection">
        <div class="container pac-selection__grid">
            <div class="pac-selection__heading">
                <div class="pac-section-mark"><span>03</span> Bien sélectionner</div>
                <p class="pac-kicker pac-kicker--dark"><span aria-hidden="true"></span> Chaque détail compte</p>
                <h2>Une PAC se choisit avec le bâtiment.</h2>
                <p>
                    La puissance seule ne suffit pas. L’existant, le climat et les attentes
                    d’usage doivent être étudiés ensemble pour orienter la sélection.
                </p>
            </div>

            <div class="pac-selection__list">
                <article>
                    <span>01</span>
                    <div><h3>Déperditions</h3><p>Volume, isolation, exposition et température extérieure de référence.</p></div>
                </article>
                <article>
                    <span>02</span>
                    <div><h3>Émetteurs</h3><p>Unités intérieures, plancher chauffant ou réseau de radiateurs existant.</p></div>
                </article>
                <article>
                    <span>03</span>
                    <div><h3>Implantation</h3><p>Distances, intégration extérieure, voisinage et niveau sonore attendu.</p></div>
                </article>
                <article>
                    <span>04</span>
                    <div><h3>Usage</h3><p>Chauffage seul, confort quatre saisons ou production d’eau chaude.</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="pac-guidance">
        <div class="container pac-guidance__inner">
            <p class="pac-kicker"><span aria-hidden="true"></span> L’accompagnement Split Distribution</p>
            <blockquote>
                Le bon équipement est celui qui reste cohérent
                <em>avec l’ensemble du projet.</em>
            </blockquote>

            <div class="pac-guidance__bottom">
                <p>
                    Notre équipe aide les professionnels à comparer les solutions,
                    sélectionner les références et préparer l’approvisionnement du chantier.
                </p>
                <a href="{{ route('contact') }}" class="pac-button pac-button--light">
                    Parler à un conseiller <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </section>
@endsection
