@extends('layouts.app')

@section('title', 'Contact | Split Distribution')

@section(
    'description',
    'Contactez Split Distribution pour vos projets de climatisation, chauffage, ventilation, besoins de stock ou demandes de service après-vente.'
)

@push('styles')
    @vite('resources/css/pages/contact.css')
@endpush

@section('body-class', 'page-contact')

@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero contact-hero" aria-labelledby="page-title">

        <p class="contact-hero__signature" aria-hidden="true">CONTACT</p>

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid">

            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Nous contacter</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Split Distribution · Saint-Priest
                </p>

                <h1 class="ax-page-hero__title" id="page-title">Parlons de votre <span>projet.</span></h1>

                <p class="ax-page-hero__lead">
                    Une question technique, un besoin de matériel ou un chantier
                    à préparer ? Notre équipe vous répond de façon claire et concrète.
                </p>

                <div class="ax-page-hero__actions">
                    <a class="ax-btn ax-btn--green" href="#formulaire">
                        <span>Écrire à l’équipe</span>
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>
            </div>

            <figure class="ax-page-hero__media contact-hero__media">
                <img
                    src="{{ asset('images/contact/technical-advice.webp') }}"
                    alt="Deux professionnels préparant un projet CVC autour d’un plan"
                    width="1536"
                    height="1024"
                    fetchpriority="high"
                    decoding="async"
                >

                <div class="ax-badge contact-hero__badge">
                    <span>Contact direct</span>
                    <strong><a href="tel:+33472230140">04 72 23 01 40</a></strong>
                    <small>Du lundi au vendredi</small>
                </div>

                <figcaption><span>01</span> Conseil technique</figcaption>
            </figure>

        </div>

    </section>



    {{-- =========================================================
        01. VOTRE DEMANDE
    ========================================================== --}}

    <section
        class="ax-section ax-section--light ax-section--lift contact-desk"
        id="formulaire"
        aria-labelledby="formulaire-title"
    >
        <div class="ax-container">

            <div class="ax-head">
                <div>
                    <p class="ax-kicker">01 — Votre demande</p>
                    <h2 id="formulaire-title">On vous écoute.</h2>
                </div>

                <p>
                    Quelques informations suffisent pour transmettre votre demande
                    au bon interlocuteur dès le premier échange.
                </p>
            </div>

            <div class="contact-desk__layout">

                <div class="contact-desk__panel" data-ax-fade>
                    @php($staticContactAction = config('contact.static_action'))

                    @if (session('status'))
                        <div class="contact-note contact-note--success" role="status">
                            <span aria-hidden="true">✓</span>
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($staticContactAction)
                        <div class="contact-note contact-note--success" role="status" data-static-contact-success hidden>
                            <span aria-hidden="true">✓</span>
                            Votre demande a bien été envoyée. Notre équipe reviendra vers vous rapidement.
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="contact-note contact-note--error" role="alert">
                            Certains champs sont incomplets ou incorrects. Vérifiez le formulaire.
                        </div>
                    @endif

                    <form method="POST" action="{{ $staticContactAction ?: route('contact.submit') }}" class="contact-form">
                        @if ($staticContactAction)
                            <input type="hidden" name="_subject" value="Nouvelle demande depuis split-distribution.fr">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_next" value="{{ route('contact') }}?sent=1#formulaire">
                            <input type="hidden" name="_url" value="{{ route('contact') }}">
                        @else
                            @csrf
                        @endif

                        <div class="contact-trap" aria-hidden="true">
                            <label for="website">Site internet</label>
                            <input
                                id="website"
                                name="{{ $staticContactAction ? '_honey' : 'website' }}"
                                type="text"
                                tabindex="-1"
                                autocomplete="off"
                            >
                        </div>

                        <fieldset class="contact-needs">
                            <legend>Votre besoin *</legend>

                            <div class="contact-needs__grid">
                                @foreach ([
                                    'project' => ['01', 'Étude de projet'],
                                    'technical' => ['02', 'Conseil technique'],
                                    'availability' => ['03', 'Stock & livraison'],
                                    'after-sales' => ['04', 'Service après-vente'],
                                ] as $value => [$number, $label])
                                    <label class="contact-need">
                                        <input
                                            type="radio"
                                            name="subject"
                                            value="{{ $value }}"
                                            @checked(old('subject', 'project') === $value)
                                        >
                                        <span><small>{{ $number }}</small>{{ $label }}</span>
                                    </label>
                                @endforeach
                            </div>

                            @error('subject')
                                <p class="contact-error">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="contact-inputs">
                            <div class="contact-input">
                                <label for="name">Nom et prénom *</label>
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    value="{{ old('name') }}"
                                    autocomplete="name"
                                    placeholder="Votre nom"
                                    required
                                    @error('name') aria-invalid="true" @enderror
                                >
                                @error('name')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-input">
                                <label for="company">Entreprise *</label>
                                <input
                                    id="company"
                                    name="company"
                                    type="text"
                                    value="{{ old('company') }}"
                                    autocomplete="organization"
                                    placeholder="Nom de votre société"
                                    required
                                    @error('company') aria-invalid="true" @enderror
                                >
                                @error('company')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-input">
                                <label for="email">Adresse e-mail *</label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    placeholder="vous@entreprise.fr"
                                    required
                                    @error('email') aria-invalid="true" @enderror
                                >
                                @error('email')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-input">
                                <label for="phone">Téléphone</label>
                                <input
                                    id="phone"
                                    name="phone"
                                    type="tel"
                                    value="{{ old('phone') }}"
                                    autocomplete="tel"
                                    placeholder="06 00 00 00 00"
                                    @error('phone') aria-invalid="true" @enderror
                                >
                                @error('phone')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="contact-input contact-input--wide">
                            <label for="message">Parlez-nous de votre demande *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                maxlength="3000"
                                placeholder="Type de bâtiment, équipements recherchés, contraintes, délais…"
                                required
                                @error('message') aria-invalid="true" @enderror
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="contact-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="contact-send">
                            <label class="contact-agree">
                                <input type="checkbox" name="privacy" value="1" @checked(old('privacy')) required>
                                <span>
                                    J’ai pris connaissance de la
                                    <a href="{{ route('legal.privacy') }}" target="_blank" rel="noopener">
                                        politique de confidentialité
                                    </a>. *
                                </span>
                            </label>

                            <button type="submit" class="ax-btn ax-btn--green contact-send__button">
                                <span>Envoyer la demande</span>
                                <span aria-hidden="true">↗</span>
                            </button>
                        </div>

                        @error('privacy')
                            <p class="contact-error">{{ $message }}</p>
                        @enderror
                    </form>
                </div>

                <aside class="contact-desk__aside">

                    <div class="contact-tile contact-tile--phone" data-ax-fade>
                        <p>Besoin d’une réponse directe ?</p>
                        <a href="tel:+33472230140">04 72 23 01 40</a>
                        <span>Appeler maintenant <b aria-hidden="true">↗</b></span>
                    </div>

                    <div class="contact-tile contact-tile--address" data-ax-fade>
                        <p class="contact-tile__label">Nous trouver</p>
                        <address>
                            <strong>Split Distribution</strong>
                            50 rue Jean Zay<br>
                            69800 Saint-Priest
                        </address>
                        <a
                            href="https://www.google.com/maps/search/?api=1&query=50+rue+Jean+Zay+69800+Saint-Priest"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Ouvrir l’itinéraire <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="contact-tile contact-tile--method" data-ax-fade>
                        <p class="contact-tile__label">Notre méthode</p>
                        <ol>
                            <li><span>01</span> Comprendre votre besoin</li>
                            <li><span>02</span> Identifier la bonne solution</li>
                            <li><span>03</span> Vous apporter une réponse claire</li>
                        </ol>
                    </div>

                </aside>

            </div>

        </div>
    </section>

@endsection
