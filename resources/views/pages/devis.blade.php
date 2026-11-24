@extends('layouts.app')


@section('title', 'Demander un devis | Split Distribution')

@section(
    'description',
    'Demandez un devis à Split Distribution en quatre étapes : climatisation, pompes à chaleur, ventilation, tertiaire, énergies et accessoires.'
)

@push('styles')
    @vite('resources/css/pages/contact.css')
    @vite('resources/css/pages/devis.css')
@endpush

@section('body-class', 'page-devis')


@php
    $staticAction = config('contact.static_action');
    $families = config('quote.families');
    $selectedFamily = old('family', $preselectedFamily ?? null);
    $steps = ['Votre besoin', 'Votre projet', 'Les détails', 'Vos coordonnées'];

    // Champs de chaque étape : pour rouvrir la bonne étape s'il y a une erreur
    $stepFields = [
        1 => ['family'],
        2 => ['project', 'building', 'quantity', 'timeline'],
        3 => ['details', 'attachment'],
        4 => ['profile', 'name', 'company', 'email', 'phone', 'postcode', 'privacy', 'website'],
    ];
    $errorStep = collect($stepFields)->search(fn ($fields) => collect($fields)->contains(fn ($field) => $errors->has($field)));
@endphp


@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero ax-page-hero--text devis-hero" aria-labelledby="page-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid">
            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Demander un devis</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Devis pour les professionnels
                </p>

                <h1 class="ax-page-hero__title" id="page-title">
                    Votre devis,
                    <span>en quatre étapes.</span>
                </h1>

                <p class="ax-page-hero__lead">
                    Décrivez votre besoin et votre chantier : notre équipe prépare
                    une proposition adaptée et revient vers vous.
                </p>

                <ol class="ax-chips devis-hero__steps" aria-label="Les étapes de la demande">
                    @foreach ($steps as $label)
                        <li><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span> {{ $label }}</li>
                    @endforeach
                </ol>
            </div>
        </div>

    </section>



    {{-- =========================================================
        LE PARCOURS
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift devis-section" id="demande" aria-labelledby="demande-title">
        <div class="ax-container">

            <h2 class="sr-only" id="demande-title">Votre demande de devis</h2>

            <div class="contact-desk__layout">

                <div class="contact-desk__panel devis-panel">

                    {{-- Confirmation après l'envoi (à la place du formulaire) --}}
                    @if (session('quote_sent'))
                        <div class="devis-done" role="status" data-quote-sent>
                            <span class="devis-done__icon" aria-hidden="true">✓</span>
                            <p class="devis-done__kicker">Demande envoyée</p>
                            <h2 class="devis-done__title">Merci, c’est bien reçu !</h2>
                            <p>Votre demande de devis <strong>{{ session('quote_reference') }}</strong> est arrivée chez notre équipe. Nous revenons vers vous rapidement.</p>
                            <div class="devis-done__actions">
                                <a class="ax-btn ax-btn--dark" href="{{ route('home') }}"><span>Retour à l’accueil</span><span aria-hidden="true">↗</span></a>
                                <a class="ax-link ax-link--dark" href="{{ route('solutions.index') }}">Voir nos solutions <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    @endif

                    @if ($staticAction && ! session('quote_sent'))
                        <div class="devis-done" role="status" data-static-contact-success data-quote-sent hidden>
                            <span class="devis-done__icon" aria-hidden="true">✓</span>
                            <p class="devis-done__kicker">Demande envoyée</p>
                            <h2 class="devis-done__title">Merci, c’est bien reçu !</h2>
                            <p>Votre demande de devis est bien envoyée. Notre équipe revient vers vous rapidement.</p>
                            <div class="devis-done__actions">
                                <a class="ax-btn ax-btn--dark" href="{{ route('home') }}"><span>Retour à l’accueil</span><span aria-hidden="true">↗</span></a>
                                <a class="ax-link ax-link--dark" href="{{ route('solutions.index') }}">Voir nos solutions <span aria-hidden="true">↗</span></a>
                            </div>
                        </div>
                    @endif

                    @unless (session('quote_sent'))

                    @if ($errors->any())
                        <div class="contact-note contact-note--error" role="alert">
                            Certains champs sont incomplets ou incorrects. Vérifiez votre demande.
                        </div>
                    @endif

                    {{-- Progression (pilotée par devis.js) --}}
                    <ol class="devis-progress" aria-hidden="true">
                        @foreach ($steps as $label)
                            <li data-progress-step="{{ $loop->iteration }}">
                                <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <small>{{ $label }}</small>
                            </li>
                        @endforeach
                    </ol>

                    <form
                        method="POST"
                        action="{{ $staticAction ?: route('devis.submit') }}"
                        enctype="multipart/form-data"
                        class="contact-form devis-form"
                        data-devis-form
                        @if ($errorStep) data-start-step="{{ $errorStep }}" @endif
                    >
                        @if ($staticAction)
                            <input type="hidden" name="_subject" value="Nouvelle demande de devis depuis split-distribution.fr">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_next" value="{{ route('devis') }}?sent=1#demande">
                            <input type="hidden" name="_url" value="{{ route('devis') }}">
                        @else
                            @csrf
                        @endif

                        {{-- Provenance des campagnes (?utm_source=…) --}}
                        @foreach (['utm_source', 'utm_medium', 'utm_campaign'] as $utm)
                            <input type="hidden" name="{{ $utm }}" value="{{ old($utm, request()->query($utm)) }}">
                        @endforeach

                        <div class="contact-trap" aria-hidden="true">
                            <label for="website">Site internet</label>
                            <input id="website" name="{{ $staticAction ? '_honey' : 'website' }}" type="text" tabindex="-1" autocomplete="off">
                        </div>


                        {{-- ÉTAPE 1 : LA FAMILLE --}}
                        <fieldset class="devis-step" data-step="1">
                            <legend class="devis-step__title" tabindex="-1">
                                <span>Étape 1 sur 4</span>
                                Quel type d’équipement recherchez-vous ? *
                            </legend>

                            <div class="devis-families">
                                @foreach ($families as $value => $family)
                                    <label class="devis-family">
                                        <input type="radio" name="family" value="{{ $value }}" @checked($selectedFamily === $value) required>
                                        <span class="devis-family__card">
                                            @if ($family['image'])
                                                <span class="devis-family__thumb">
                                                    <img src="{{ asset($family['image']) }}" alt="" loading="lazy" decoding="async">
                                                </span>
                                            @else
                                                <span class="devis-family__thumb devis-family__thumb--more" aria-hidden="true">+</span>
                                            @endif

                                            <span class="devis-family__copy">
                                                <small>{{ $family['eyebrow'] }}</small>
                                                <strong>{{ $family['label'] }}</strong>
                                            </span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>

                            @error('family')
                                <p class="contact-error">{{ $message }}</p>
                            @enderror
                        </fieldset>


                        {{-- ÉTAPE 2 : LE PROJET --}}
                        <fieldset class="devis-step" data-step="2">
                            <legend class="devis-step__title" tabindex="-1">
                                <span>Étape 2 sur 4</span>
                                Parlez-nous du projet
                            </legend>

                            <div class="devis-choices">
                                <p class="devis-choices__label" id="project-label">Type de projet *</p>
                                <div class="devis-pills" role="radiogroup" aria-labelledby="project-label">
                                    @foreach (config('quote.projects') as $value => $label)
                                        <label class="devis-pill">
                                            <input type="radio" name="project" value="{{ $value }}" @checked(old('project') === $value) required>
                                            <span>{{ $label }}</span>
                                        </label>
                                    @endforeach
                                </div>
                                @error('project')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="devis-choices">
                                <p class="devis-choices__label" id="building-label">Type de bâtiment *</p>
                                <div class="devis-pills" role="radiogroup" aria-labelledby="building-label">
                                    @foreach (config('quote.buildings') as $value => $label)
                                        <label class="devis-pill">
                                            <input type="radio" name="building" value="{{ $value }}" @checked(old('building') === $value) required>
                                            <span>{{ $label }}</span>
                                        </label>
                                    @endforeach
                                </div>
                                @error('building')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-inputs">
                                <div class="contact-input">
                                    <label for="quantity">Quantités ou puissance</label>
                                    <input
                                        id="quantity"
                                        name="quantity"
                                        type="text"
                                        maxlength="160"
                                        value="{{ old('quantity') }}"
                                        placeholder="Ex. 3 unités intérieures, 12 kW…"
                                        @error('quantity') aria-invalid="true" @enderror
                                    >
                                    @error('quantity')
                                        <p class="contact-error">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="contact-input">
                                    <label for="timeline">Délai souhaité *</label>
                                    <select id="timeline" name="timeline" required @error('timeline') aria-invalid="true" @enderror>
                                        <option value="" disabled @selected(! old('timeline'))>Choisir un délai</option>
                                        @foreach (config('quote.timelines') as $value => $label)
                                            <option value="{{ $value }}" @selected(old('timeline') === $value)>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @error('timeline')
                                        <p class="contact-error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>


                        {{-- ÉTAPE 3 : LES DÉTAILS --}}
                        <fieldset class="devis-step" data-step="3">
                            <legend class="devis-step__title" tabindex="-1">
                                <span>Étape 3 sur 4</span>
                                Les détails de votre demande
                            </legend>

                            <div class="contact-input contact-input--wide">
                                <label for="details">Références, marques ou description du besoin *</label>
                                <textarea
                                    id="details"
                                    name="details"
                                    rows="6"
                                    minlength="10"
                                    maxlength="3000"
                                    placeholder="Ex. 2 PAC air/eau Haier R290 de 8 kW, ou la description de l’installation à équiper…"
                                    required
                                    @error('details') aria-invalid="true" @enderror
                                >{{ old('details') }}</textarea>
                                @error('details')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-input contact-input--wide">
                                <label for="attachment">Joindre un fichier (facultatif)</label>
                                <label class="devis-file">
                                    <input
                                        id="attachment"
                                        name="attachment"
                                        type="file"
                                        accept=".{{ implode(',.', config('quote.attachment.mimes')) }}"
                                        data-devis-file
                                        @error('attachment') aria-invalid="true" @enderror
                                    >
                                    <span class="devis-file__box">
                                        <strong data-devis-file-name>Choisir un fichier</strong>
                                        <small>Liste de références, plan, photo… PDF, image, Excel ou Word, 10 Mo maximum.</small>
                                    </span>
                                </label>
                                @error('attachment')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </fieldset>


                        {{-- ÉTAPE 4 : LES COORDONNÉES --}}
                        <fieldset class="devis-step" data-step="4">
                            <legend class="devis-step__title" tabindex="-1">
                                <span>Étape 4 sur 4</span>
                                Où vous envoyer le devis ?
                            </legend>

                            <div class="devis-recap" data-devis-recap hidden></div>

                            <div class="contact-input contact-input--wide">
                                <label for="profile">Vous êtes *</label>
                                <select id="profile" name="profile" required @error('profile') aria-invalid="true" @enderror>
                                    <option value="" disabled @selected(! old('profile'))>Choisir</option>
                                    @foreach (config('quote.profiles') as $value => $label)
                                        <option value="{{ $value }}" @selected(old('profile') === $value)>{{ $label }}</option>
                                    @endforeach
                                </select>
                                @error('profile')
                                    <p class="contact-error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="contact-inputs">
                                @foreach ([
                                    ['name', 'Nom et prénom *', 'text', 'name', 'Votre nom'],
                                    ['company', 'Entreprise *', 'text', 'organization', 'Nom de votre société'],
                                    ['email', 'Adresse e-mail *', 'email', 'email', 'vous@entreprise.fr'],
                                    ['phone', 'Téléphone *', 'tel', 'tel', '06 00 00 00 00'],
                                    ['postcode', 'Code postal du chantier *', 'text', 'postal-code', '69800'],
                                ] as [$field, $label, $type, $autocomplete, $placeholder])
                                    <div class="contact-input">
                                        <label for="{{ $field }}">{{ $label }}</label>
                                        <input
                                            id="{{ $field }}"
                                            name="{{ $field }}"
                                            type="{{ $type }}"
                                            value="{{ old($field) }}"
                                            autocomplete="{{ $autocomplete }}"
                                            placeholder="{{ $placeholder }}"
                                            required
                                            @if ($field === 'postcode') inputmode="numeric" maxlength="10" @endif
                                            @error($field) aria-invalid="true" @enderror
                                        >
                                        @error($field)
                                            <p class="contact-error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endforeach
                            </div>

                            <div class="contact-send">
                                <label class="contact-agree">
                                    <input type="checkbox" name="privacy" value="1" @checked(old('privacy')) required>
                                    <span>
                                        J’accepte que mes informations soient utilisées pour préparer mon devis,
                                        selon la
                                        <a href="{{ route('legal.privacy') }}" target="_blank" rel="noopener">politique de confidentialité</a>. *
                                    </span>
                                </label>

                                <button type="submit" class="ax-btn ax-btn--green contact-send__button">
                                    <span>Envoyer ma demande</span>
                                    <span aria-hidden="true">↗</span>
                                </button>
                            </div>

                            @error('privacy')
                                <p class="contact-error">{{ $message }}</p>
                            @enderror
                        </fieldset>


                        {{-- Navigation entre les étapes (visible seulement avec JavaScript) --}}
                        <div class="devis-nav" data-devis-nav hidden>
                            <button type="button" class="devis-nav__back" data-devis-back>
                                <span aria-hidden="true">←</span> Retour
                            </button>

                            <button type="button" class="ax-btn ax-btn--dark devis-nav__next" data-devis-next>
                                <span>Continuer</span>
                                <span aria-hidden="true">→</span>
                            </button>
                        </div>
                    </form>

                    @endunless
                </div>


                <aside class="contact-desk__aside">
                    <div class="contact-tile contact-tile--phone" data-ax-fade>
                        <p>{{ session('quote_sent') ? 'Une question sur votre demande ?' : 'Une question avant d’envoyer ?' }}</p>
                        <a href="tel:+33472230140">04 72 23 01 40</a>
                        <span>Appeler l’équipe <b aria-hidden="true">↗</b></span>
                    </div>

                    <div class="contact-tile contact-tile--method devis-next-steps" data-ax-fade>
                        <p class="contact-tile__label">Ensuite</p>
                        <ol>
                            <li><span>01</span> Votre demande arrive directement à l’équipe.</li>
                            <li><span>02</span> Nous revenons vers vous si une précision est utile.</li>
                            <li><span>03</span> Vous recevez une proposition adaptée à votre projet.</li>
                        </ol>
                    </div>
                </aside>

            </div>
        </div>
    </section>

@endsection
