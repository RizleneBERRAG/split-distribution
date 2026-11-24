@extends('layouts.app')


@section('title', 'Accessoires CVC | Split Distribution')

@section(
    'description',
    'Le catalogue d’accessoires CVC Split Distribution est en préparation. Contactez notre équipe pour identifier les composants adaptés à votre chantier.'
)

@section('body-class', 'page-accessoires')


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
                    <a href="{{ route('solutions.index') }}">Solutions</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Accessoires</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Catalogue en préparation
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    La dernière pièce
                    <span>compte aussi.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Nous préparons un espace dédié aux composants et accessoires utiles
                    à vos installations. En attendant, notre équipe peut rechercher la
                    bonne référence avec vous.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="{{ route('devis', ['famille' => 'accessoires']) }}">
                        <span>Demander un devis</span>
                        <span aria-hidden="true">↗</span>
                    </a>

                    <a class="ax-btn ax-btn--ghost" href="tel:+33472230140">
                        <span>04 72 23 01 40</span>
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <figure class="ax-page-hero__media">
                <img
                    src="{{ asset('images/home/accessoires.webp') }}"
                    alt="Sélection de composants et accessoires pour installations CVC"
                    width="1535"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge" role="group" aria-label="État de préparation du catalogue">
                    <span>Mise en ligne</span>
                    <strong>En cours</strong>
                    <small>Références · compatibilités · disponibilité</small>
                </div>

                <figcaption><span>06</span> Accessoires · Installation complète</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        BANDEAU : LES FAMILLES À VENIR
    ========================================================== --}}

    <section class="ax-marquee" aria-label="Familles d’accessoires à venir">
        <div class="ax-marquee__track">
            @foreach ([false, true] as $copy)
                <div class="ax-marquee__group" @if ($copy) aria-hidden="true" @endif>
                    @foreach (['Raccordement', 'Évacuation', 'Support', 'Régulation'] as $family)
                        <span>{{ $family }}</span>
                        <i aria-hidden="true"></i>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>



    {{-- =========================================================
        APPEL FINAL
    ========================================================== --}}

    <section class="ax-final" aria-labelledby="final-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>

        <div class="ax-container ax-final__inner">
            <p class="ax-kicker">Catalogue en préparation</p>

            <h2 id="final-title">
                Besoin
                <span>immédiat&nbsp;?</span>
            </h2>

            <p class="ax-final__text">
                Envoyez-nous la référence, une photo ou les caractéristiques recherchées.
            </p>

            <div class="ax-final__actions">
                <a class="ax-final__button" href="{{ route('contact') }}">
                    <span>Écrire à l’équipe</span>
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="ax-final__phone" href="tel:+33472230140">
                    ou appelez le 04 72 23 01 40
                </a>
            </div>
        </div>

    </section>

@endsection
