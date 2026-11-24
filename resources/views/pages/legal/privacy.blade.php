@extends('layouts.app')

@section('title', 'Politique de confidentialité | Split Distribution')

@section(
    'description',
    'Politique de confidentialité et informations sur le traitement des demandes adressées à Split Distribution.'
)

@push('styles')
    @vite('resources/css/pages/legal.css')
@endpush

@section('body-class', 'page-legal')

@section('content')

    {{-- =========================================================
        EN-TÊTE
    ========================================================== --}}

    <section class="ax-page-hero ax-page-hero--text legal-hero legal-hero--privacy" aria-labelledby="page-title">

        <canvas class="ax-flow" aria-hidden="true"></canvas>
        <div class="ax-page-hero__glow" aria-hidden="true"></div>

        <div class="ax-container ax-page-hero__grid legal-hero__grid">

            <div>
                <nav class="ax-crumbs" aria-label="Fil d’Ariane">
                    <a href="{{ route('home') }}">Accueil</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Confidentialité</span>
                </nav>

                <p class="ax-eyebrow">
                    <span class="ax-eyebrow__dot" aria-hidden="true"></span>
                    Vos informations
                </p>

                <h1 class="ax-page-hero__title" id="page-title">Une demande. <span>Des données protégées.</span></h1>
            </div>

            <div class="legal-hero__note">
                <p class="ax-page-hero__lead">
                    Ce que nous collectons, pourquoi nous le faisons et les droits dont vous disposez.
                </p>

                <ul class="ax-chips">
                    <li><span>Document 02</span></li>
                    <li>Dernière mise à jour : septembre 2026</li>
                </ul>
            </div>

        </div>

    </section>



    {{-- =========================================================
        ARTICLES
    ========================================================== --}}

    <section class="ax-section ax-section--light ax-section--lift legal-body" aria-labelledby="legal-summary-title">
        <div class="ax-container legal-layout">

            <aside class="legal-aside">

                <div class="legal-summary legal-summary--dark">
                    <p class="legal-summary__label" id="legal-summary-title">L’essentiel</p>
                    <strong>Vos informations servent uniquement à comprendre votre demande et à vous répondre.</strong>
                    <a href="{{ route('contact') }}">Faire une demande <span aria-hidden="true">↗</span></a>
                </div>

                <nav class="legal-toc" aria-labelledby="page-title">
                    <ol>
                        <li><a href="#responsable"><span>01</span> Responsable du traitement</a></li>
                        <li><a href="#donnees"><span>02</span> Données collectées</a></li>
                        <li><a href="#finalite"><span>03</span> Finalité et base juridique</a></li>
                        <li><a href="#destinataires"><span>04</span> Destinataires</a></li>
                        <li><a href="#conservation"><span>05</span> Durée de conservation</a></li>
                        <li><a href="#droits"><span>06</span> Vos droits</a></li>
                        <li><a href="#cookies"><span>07</span> Cookies et mesure d’audience</a></li>
                    </ol>
                </nav>

            </aside>

            <div class="legal-articles">

                <article class="legal-article" id="responsable" aria-labelledby="responsable-title" data-ax-fade>
                    <span class="legal-article__number">01</span>
                    <div class="legal-article__body">
                        <h2 id="responsable-title">Responsable du traitement</h2>
                        <p><strong>SPLIT DISTRIBUTION</strong><br>Bâtiment E, Veellage de Parilly<br>50 rue Jean Zay<br>69800 Saint-Priest – France<br>Téléphone : <a href="tel:+33472230140">04 72 23 01 40</a></p>
                        <p>Pour toute question relative à vos données ou pour exercer vos droits, écrivez à <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a> ou utilisez le <a href="{{ route('contact') }}">formulaire de contact</a>.</p>
                    </div>
                </article>

                <article class="legal-article" id="donnees" aria-labelledby="donnees-title" data-ax-fade>
                    <span class="legal-article__number">02</span>
                    <div class="legal-article__body">
                        <h2 id="donnees-title">Données collectées</h2>
                        <p>Lorsque vous utilisez le formulaire, nous recevons votre nom et prénom, le nom de votre entreprise, votre adresse e-mail, votre numéro de téléphone si vous le renseignez, le type de demande sélectionné et le contenu de votre message.</p>
                        <p>Lorsque vous demandez un devis, nous recevons en plus votre profil professionnel, votre numéro de téléphone, le code postal du chantier, la description de votre projet (famille d’équipements, type de projet et de bâtiment, quantités, délai souhaité, références) et, si vous en joignez un, votre fichier. Si vous arrivez depuis une de nos publicités, le nom de la campagne est également enregistré avec votre demande.</p>
                        <p>Les champs signalés par un astérisque sont obligatoires. Sans ces informations, Split Distribution ne pourra pas transmettre ni traiter votre demande. Dans le formulaire de contact, le numéro de téléphone est facultatif.</p>
                    </div>
                </article>

                <article class="legal-article" id="finalite" aria-labelledby="finalite-title" data-ax-fade>
                    <span class="legal-article__number">03</span>
                    <div class="legal-article__body">
                        <h2 id="finalite-title">Finalité et base juridique</h2>
                        <p>Ces informations permettent de qualifier votre besoin, transmettre la demande au bon interlocuteur et vous répondre. Le traitement repose sur votre demande de contact et, selon sa nature, sur l’exécution de mesures précontractuelles ou sur l’intérêt légitime de Split Distribution à répondre aux sollicitations professionnelles.</p>
                        <p>Les demandes de devis servent à préparer une proposition commerciale et à assurer son suivi. Elles reposent sur l’exécution de mesures précontractuelles prises à votre demande. La provenance publicitaire éventuelle sert uniquement à savoir quelles campagnes amènent des demandes.</p>
                    </div>
                </article>

                <article class="legal-article" id="destinataires" aria-labelledby="destinataires-title" data-ax-fade>
                    <span class="legal-article__number">04</span>
                    <div class="legal-article__body">
                        <h2 id="destinataires-title">Destinataires</h2>
                        <p>Les données sont accessibles aux membres habilités de Split Distribution ainsi qu’aux prestataires techniques strictement nécessaires à l’acheminement et à l’hébergement des messages. Elles ne sont ni vendues ni utilisées pour envoyer une newsletter sans démarche distincte.</p>
                        <p>Sur l’aperçu temporaire hébergé par GitHub Pages, les demandes sont relayées par <a href="https://formsubmit.co/" target="_blank" rel="noopener">FormSubmit</a>. Ce relais sera retiré lorsque le formulaire sera exploité directement par l’hébergement Laravel définitif.</p>
                    </div>
                </article>

                <article class="legal-article" id="conservation" aria-labelledby="conservation-title" data-ax-fade>
                    <span class="legal-article__number">05</span>
                    <div class="legal-article__body">
                        <h2 id="conservation-title">Durée de conservation</h2>
                        <p>Les demandes qui ne donnent pas lieu à une relation contractuelle sont conservées pendant trois ans au maximum à compter du dernier échange avec la personne concernée. Lorsqu’une relation contractuelle est engagée, les données utiles sont conservées pendant la durée de cette relation, puis archivées pendant les durées nécessaires au respect des obligations légales et à la défense des droits de Split Distribution.</p>
                    </div>
                </article>

                <article class="legal-article" id="droits" aria-labelledby="droits-title" data-ax-fade>
                    <span class="legal-article__number">06</span>
                    <div class="legal-article__body">
                        <h2 id="droits-title">Vos droits</h2>
                        <p>Vous pouvez demander l’accès à vos données, leur rectification, leur effacement, la limitation du traitement ou vous opposer à celui-ci lorsque la loi le permet. Vous pouvez exercer ces droits en écrivant à <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a> ou via notre <a href="{{ route('contact') }}">page de contact</a>.</p>
                        <p>Si vous estimez que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la <a href="https://www.cnil.fr/fr/plaintes" target="_blank" rel="noopener">CNIL</a>.</p>
                    </div>
                </article>

                <article class="legal-article" id="cookies" aria-labelledby="cookies-title" data-ax-fade>
                    <span class="legal-article__number">07</span>
                    <div class="legal-article__body">
                        <h2 id="cookies-title">Cookies et mesure d’audience</h2>
                        <p>Dans sa configuration actuelle, le site n’utilise pas de cookies publicitaires ni d’outil de mesure d’audience. Des cookies strictement nécessaires au fonctionnement et à la sécurité du formulaire peuvent être utilisés. Cette rubrique devra être mise à jour si de nouveaux outils sont ajoutés.</p>
                    </div>
                </article>

            </div>

        </div>
    </section>

@endsection
