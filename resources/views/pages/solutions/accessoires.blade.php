@extends('layouts.app')

@section('title', 'Accessoires CVC | Split Distribution')

@section(
    'description',
    'Le catalogue d’accessoires CVC Split Distribution est en préparation. Contactez notre équipe pour identifier les composants adaptés à votre chantier.'
)

@push('styles')
    @vite('resources/css/pages/accessoires.css')
@endpush

@section('body-class', 'page-accessoires')

@section('content')
    <section class="access-hero">
        <div class="container access-hero__shell">
            <nav class="access-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Accessoires</span>
            </nav>

            <div class="access-hero__grid">
                <div class="access-hero__content">
                    <p class="access-kicker"><span aria-hidden="true"></span> Catalogue en préparation</p>

                    <h1>La dernière pièce<br><em>compte aussi.</em></h1>

                    <p class="access-hero__lead">
                        Nous préparons un espace dédié aux composants et accessoires utiles
                        à vos installations. En attendant, notre équipe peut rechercher la
                        bonne référence avec vous.
                    </p>

                    <div class="access-hero__actions">
                        <a href="{{ route('contact') }}">Demander une référence <span aria-hidden="true">↗</span></a>
                        <a href="tel:+33472230140">04 72 23 01 40</a>
                    </div>

                    <div class="access-status" aria-label="État de préparation du catalogue">
                        <div class="access-status__head">
                            <span>Mise en ligne</span>
                            <strong>En cours</strong>
                        </div>
                        <div class="access-status__track" aria-hidden="true"><span></span></div>
                        <p>Références · compatibilités · disponibilité</p>
                    </div>
                </div>

                <div class="access-hero__visual">
                    <figure>
                        <img
                            src="{{ asset('images/home/accessoires.webp') }}"
                            alt="Sélection de composants et accessoires pour installations CVC"
                            width="1535"
                            height="1024"
                        >
                    </figure>

                    <div class="access-hero__marker">
                        <span>06</span>
                        <strong>Accessoires</strong>
                        <small>Installation complète</small>
                    </div>

                    <div class="access-hero__note">
                        <span>Besoin immédiat ?</span>
                        <p>Envoyez-nous la référence, une photo ou les caractéristiques recherchées.</p>
                        <a href="{{ route('contact') }}">Écrire à l’équipe <span aria-hidden="true">↗</span></a>
                    </div>
                </div>
            </div>

            <div class="access-hero__families" aria-label="Familles d’accessoires à venir">
                <span><small>01</small> Raccordement</span>
                <span><small>02</small> Évacuation</span>
                <span><small>03</small> Support</span>
                <span><small>04</small> Régulation</span>
            </div>
        </div>
    </section>
@endsection
