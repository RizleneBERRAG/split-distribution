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
    <section class="contact-hero">
        <div class="container">
            <nav class="contact-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>Nous contacter</span>
            </nav>

            <div class="contact-hero__grid">
                <div class="contact-hero__content">
                    <p class="contact-kicker"><span aria-hidden="true"></span> Un interlocuteur local</p>
                    <h1>
                        Vous avez le chantier.
                        <em>Nous avons les bonnes questions.</em>
                    </h1>
                    <p>
                        Étude de projet, conseil technique, disponibilité du matériel
                        ou SAV : indiquez-nous votre besoin pour être orienté efficacement.
                    </p>
                </div>

                <a href="tel:+33472230140" class="contact-call">
                    <span>Vous préférez aller droit au but ?</span>
                    <strong>04 72 23 01 40</strong>
                    <small>Appeler l’équipe <b aria-hidden="true">↗</b></small>
                </a>
            </div>

            <div class="contact-hero__rail">
                <div><span>01</span><strong>Projet</strong></div>
                <div><span>02</span><strong>Conseil technique</strong></div>
                <div><span>03</span><strong>Stock &amp; livraison</strong></div>
                <div><span>04</span><strong>SAV</strong></div>
            </div>
        </div>
    </section>

    <section class="contact-request" id="formulaire">
        <div class="container contact-request__grid">
            <aside class="contact-request__aside">
                <div>
                    <p class="contact-section-index"><span>01</span> Votre demande</p>
                    <h2>Parlons concret.</h2>
                    <p>
                        Plus votre demande est précise, plus notre équipe pourra
                        vous apporter une première réponse utile.
                    </p>
                </div>

                <dl>
                    <div>
                        <dt>Adresse</dt>
                        <dd>50 rue Jean Zay<br>69800 Saint-Priest</dd>
                    </div>
                    <div>
                        <dt>Téléphone</dt>
                        <dd><a href="tel:+33472230140">04 72 23 01 40</a></dd>
                    </div>
                    <div>
                        <dt>Zone</dt>
                        <dd>Saint-Priest · Rhône-Alpes</dd>
                    </div>
                </dl>
            </aside>

            <div class="contact-form-card">
                <div class="contact-form-card__heading">
                    <span>Formulaire de contact</span>
                    <p>Tous les champs marqués d’un astérisque sont obligatoires.</p>
                </div>

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
                        <input
                            id="website"
                            name="website"
                            type="text"
                            tabindex="-1"
                            autocomplete="off"
                        >
                    </div>

                    <fieldset class="contact-topics">
                        <legend>Quel est votre besoin ? *</legend>

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
                                    <span>
                                        <small>{{ $number }}</small>
                                        <strong>{{ $label }}</strong>
                                    </span>
                                </label>
                            @endforeach
                        </div>

                        @error('subject')
                            <p class="contact-field-error">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <div class="contact-form__row">
                        <div class="contact-field">
                            <label for="name">Nom et prénom *</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                autocomplete="name"
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
                                required
                                @error('company') aria-invalid="true" @enderror
                            >
                            @error('company')
                                <p class="contact-field-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="contact-form__row">
                        <div class="contact-field">
                            <label for="email">Adresse e-mail *</label>
                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                autocomplete="email"
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
                                @error('phone') aria-invalid="true" @enderror
                            >
                            @error('phone')
                                <p class="contact-field-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="contact-field">
                        <label for="message">Votre message *</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            maxlength="3000"
                            required
                            @error('message') aria-invalid="true" @enderror
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="contact-field-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="contact-form__footer">
                        <label class="contact-consent">
                            <input
                                type="checkbox"
                                name="privacy"
                                value="1"
                                @checked(old('privacy'))
                                required
                            >
                            <span>
                                J’accepte que mes informations soient utilisées pour répondre
                                à cette demande. *
                            </span>
                        </label>

                        <button type="submit" class="contact-submit">
                            Envoyer ma demande <span aria-hidden="true">↗</span>
                        </button>
                    </div>

                    @error('privacy')
                        <p class="contact-field-error">{{ $message }}</p>
                    @enderror
                </form>
            </div>
        </div>
    </section>

    <section class="contact-location">
        <div class="container contact-location__grid">
            <div>
                <p class="contact-section-index contact-section-index--dark"><span>02</span> Nous trouver</p>
                <h2>À Saint-Priest. <em>Au plus près des professionnels.</em></h2>
            </div>

            <div class="contact-location__details">
                <p>
                    Split Distribution<br>
                    50 rue Jean Zay<br>
                    69800 Saint-Priest
                </p>
                <a
                    href="https://www.google.com/maps/search/?api=1&query=50+rue+Jean+Zay+69800+Saint-Priest"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    Ouvrir l’itinéraire <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>

        <div class="contact-location__word" aria-hidden="true">SAINT-PRIEST</div>
    </section>
@endsection
