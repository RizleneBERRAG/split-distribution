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
    <section class="entreprise-hero">
        <img
            class="entreprise-hero__image"
            src="{{ asset('images/entreprise/team-work.webp') }}"
            alt="Échange technique entre professionnels dans un espace dédié au matériel CVC"
            width="1536"
            height="1024"
            fetchpriority="high"
        >

        <div class="entreprise-hero__veil" aria-hidden="true"></div>

        <div class="container entreprise-hero__inner">
            <nav class="entreprise-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>L’entreprise</span>
            </nav>

            <div class="entreprise-hero__copy">
                <p class="entreprise-kicker">
                    <span aria-hidden="true"></span>
                    Split Distribution · Saint-Priest
                </p>

                <h1>La technique compte.<br><em>La relation aussi.</em></h1>

                <p class="entreprise-hero__intro">
                    Nous aidons les professionnels du CVC à transformer un besoin concret
                    en une sélection claire, disponible et prête pour le chantier.
                </p>

                <a class="entreprise-hero__link" href="{{ route('contact') }}">
                    Rencontrer l’équipe <span aria-hidden="true">↗</span>
                </a>
            </div>

            <div class="entreprise-hero__rail" aria-label="Nos engagements">
                <div><span>01</span><strong>Conseil juste</strong></div>
                <div><span>02</span><strong>Stock local</strong></div>
                <div><span>03</span><strong>Suivi durable</strong></div>
            </div>
        </div>
    </section>

    <section class="entreprise-conviction">
        <div class="container entreprise-conviction__grid">
            <p class="entreprise-index"><span>01</span> Notre conviction</p>

            <div class="entreprise-conviction__content">
                <p class="entreprise-kicker entreprise-kicker--dark">
                    <span aria-hidden="true"></span>
                    Au-delà de la référence
                </p>

                <h2>Le bon matériel ne suffit pas.<br><em>Il faut le bon accompagnement.</em></h2>

                <div class="entreprise-conviction__text">
                    <p>
                        Un équipement peut être performant sur le papier et inadapté au chantier.
                        Notre rôle est de comprendre le contexte avant de parler produit : usage,
                        bâtiment, contraintes, délais et attentes du client final.
                    </p>
                    <p>
                        Cette lecture d’ensemble permet de proposer une solution cohérente,
                        d’organiser la commande avec précision et de rester présent lorsque
                        le projet entre dans sa phase concrète.
                    </p>
                </div>
            </div>

            <aside class="entreprise-location" aria-label="Implantation de Split Distribution">
                <span class="entreprise-location__mark" aria-hidden="true">69</span>
                <div>
                    <small>Notre point d’ancrage</small>
                    <strong>Saint-Priest</strong>
                    <p>50 rue Jean Zay<br>69800 Saint-Priest</p>
                </div>
            </aside>
        </div>
    </section>

    <section class="entreprise-role">
        <div class="container entreprise-role__grid">
            <div class="entreprise-role__heading">
                <p class="entreprise-index entreprise-index--light"><span>02</span> Notre rôle</p>
                <h2>Relier le besoin,<br>le produit<br><em>et le chantier.</em></h2>
                <p>
                    Nous occupons la place utile entre la question du professionnel
                    et la réalité de son installation.
                </p>
            </div>

            <div class="entreprise-orbit" aria-label="La place de Split Distribution dans votre projet">
                <div class="entreprise-orbit__line entreprise-orbit__line--one" aria-hidden="true"></div>
                <div class="entreprise-orbit__line entreprise-orbit__line--two" aria-hidden="true"></div>
                <div class="entreprise-orbit__line entreprise-orbit__line--three" aria-hidden="true"></div>

                <article class="entreprise-orbit__node entreprise-orbit__node--professional">
                    <span>01</span>
                    <small>Votre réalité</small>
                    <strong>Professionnel</strong>
                </article>

                <article class="entreprise-orbit__node entreprise-orbit__node--solution">
                    <span>02</span>
                    <small>Notre expertise</small>
                    <strong>Solution</strong>
                </article>

                <article class="entreprise-orbit__node entreprise-orbit__node--site">
                    <span>03</span>
                    <small>La finalité</small>
                    <strong>Chantier</strong>
                </article>

                <div class="entreprise-orbit__core">
                    <span>Split</span>
                    <strong>Distribution</strong>
                    <small>Conseiller · Approvisionner · Suivre</small>
                </div>
            </div>
        </div>
    </section>

    <section class="entreprise-principles">
        <div class="container">
            <div class="entreprise-principles__heading">
                <p class="entreprise-index"><span>03</span> Notre manière de travailler</p>
                <h2>Simple dans les échanges.<br><em>Rigoureux dans les choix.</em></h2>
            </div>

            <div class="entreprise-principles__list">
                <article>
                    <span class="entreprise-principles__number">01</span>
                    <h3>Justesse</h3>
                    <p>Recommander une solution cohérente avec le besoin réel, pas une référence choisie au hasard.</p>
                    <small>Comprendre avant de proposer</small>
                </article>

                <article>
                    <span class="entreprise-principles__number">02</span>
                    <h3>Disponibilité</h3>
                    <p>Rester joignable pour éclaircir une question, préparer une commande ou accompagner la suite.</p>
                    <small>Un interlocuteur identifiable</small>
                </article>

                <article>
                    <span class="entreprise-principles__number">03</span>
                    <h3>Proximité</h3>
                    <p>Travailler depuis Saint-Priest, au contact des professionnels et de leurs contraintes de terrain.</p>
                    <small>Une présence locale</small>
                </article>
            </div>
        </div>
    </section>

    <section class="entreprise-cta">
        <div class="container entreprise-cta__inner">
            <div>
                <p class="entreprise-kicker entreprise-kicker--dark">
                    <span aria-hidden="true"></span>
                    Faisons connaissance
                </p>
                <h2>Un projet commence mieux<br>autour d’un vrai échange.</h2>
            </div>

            <div class="entreprise-cta__contact">
                <p>
                    Une question technique, un besoin de matériel ou un chantier
                    à préparer ? Parlons-en directement.
                </p>
                <a href="{{ route('contact') }}">
                    Nous contacter <span aria-hidden="true">↗</span>
                </a>
                <a href="tel:+33472230140" class="entreprise-cta__phone">04 72 23 01 40</a>
            </div>
        </div>
    </section>
@endsection
