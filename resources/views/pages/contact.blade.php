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
    <section class="contact-intro">
        <div class="contact-intro__grid" aria-hidden="true"></div>

        <div class="container contact-intro__inner">
            <nav class="contact-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Nous contacter</span>
            </nav>

            <div class="contact-intro__content">
                <div class="contact-intro__copy">
                    <p class="contact-kicker"><span></span> Split Distribution · Saint-Priest</p>
                    <h1>Parlons de votre <em>projet.</em></h1>
                    <p class="contact-intro__lead">
                        Une question technique, un besoin de matériel ou un chantier
                        à préparer ? Notre équipe vous répond de façon claire et concrète.
                    </p>
                    <a href="#formulaire" class="contact-intro__button">
                        Écrire à l’équipe <span aria-hidden="true">↓</span>
                    </a>
                </div>

                <div class="contact-intro__visual">
                    <img
                        src="{{ asset('images/contact/technical-advice.webp') }}"
                        alt="Deux professionnels préparant un projet CVC autour d’un plan"
                        width="1536"
                        height="1024"
                        fetchpriority="high"
                    >

                    <div class="contact-intro__direct">
                        <p>Contact direct</p>
                        <a href="tel:+33472230140">04 72 23 01 40</a>
                        <span>Du lundi au vendredi</span>
                    </div>

                    <p class="contact-intro__visual-caption"><span>01</span> Conseil technique</p>
                </div>
            </div>

            <p class="contact-intro__signature" aria-hidden="true">CONTACT</p>
        </div>
    </section>

    <section class="contact-main" id="formulaire">
        <div class="container">
            <div class="contact-main__heading">
                <div>
                    <p class="contact-section-label"><span>01</span> Votre demande</p>
                    <h2>On vous écoute.</h2>
                </div>
                <p>
                    Quelques informations suffisent pour transmettre votre demande
                    au bon interlocuteur dès le premier échange.
                </p>
            </div>

            <div class="contact-main__layout">
                <div class="contact-form-panel">
                    @if (session('status'))
                        <div class="contact-alert contact-alert--success" role="status">
                            <span aria-hidden="true">✓</span>
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="contact-alert contact-alert--error" role="alert">
                            Certains champs sont incomplets ou incorrects. Vérifiez le formulaire.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}" class="contact-form">
                        @csrf

                        <div class="contact-honeypot" aria-hidden="true">
                            <label for="website">Site internet</label>
                            <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                        </div>

                        <fieldset class="contact-topics">
                            <legend>Votre besoin *</legend>

                            <div class="contact-topics__grid">
                                @foreach ([
                                    'project' => ['01', 'Étude de projet'],
                                    'technical' => ['02', 'Conseil technique'],
                                    'availability' => ['03', 'Stock & livraison'],
                                    'after-sales' => ['04', 'Service après-vente'],
                                ] as $value => [$number, $label])
                                    <label>
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
                                <p class="contact-field-error">{{ $message }}</p>
                            @enderror
                        </fieldset>

                        <div class="contact-fields">
                            <div class="contact-field">
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
                                    <p class="contact-field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-field">
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
                                    <p class="contact-field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-field">
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
                                    <p class="contact-field-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-field">
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
                                    <p class="contact-field-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="contact-field contact-field--message">
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
                                <p class="contact-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="contact-form__footer">
                            <label class="contact-consent">
                                <input type="checkbox" name="privacy" value="1" @checked(old('privacy')) required>
                                <span>J’accepte l’utilisation de mes informations pour répondre à ma demande. *</span>
                            </label>

                            <button type="submit" class="contact-submit">
                                Envoyer la demande <span aria-hidden="true">↗</span>
                            </button>
                        </div>

                        @error('privacy')
                            <p class="contact-field-error">{{ $message }}</p>
                        @enderror
                    </form>
                </div>

                <aside class="contact-sidebar">
                    <div class="contact-card contact-card--phone">
                        <p>Besoin d’une réponse directe ?</p>
                        <a href="tel:+33472230140">04 72 23 01 40</a>
                        <span>Appeler maintenant <b aria-hidden="true">↗</b></span>
                    </div>

                    <div class="contact-card contact-card--address">
                        <p class="contact-card__label">Nous trouver</p>
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

                    <div class="contact-card contact-card--process">
                        <p class="contact-card__label">Notre méthode</p>
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
