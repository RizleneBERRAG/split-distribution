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
    <header class="legal-hero legal-hero--privacy">
        <div class="container legal-hero__inner">
            <nav class="legal-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('home') }}">Accueil</a>
                <span>/</span>
                <span>Confidentialité</span>
            </nav>

            <div class="legal-hero__layout">
                <div>
                    <p class="legal-kicker"><span></span> Vos informations</p>
                    <h1>Une demande.<br><em>Des données protégées.</em></h1>
                </div>

                <div class="legal-hero__note">
                    <span>Document 02</span>
                    <p>Ce que nous collectons, pourquoi nous le faisons et les droits dont vous disposez.</p>
                    <small>Dernière mise à jour : septembre 2026</small>
                </div>
            </div>
        </div>
    </header>

    <section class="legal-content">
        <div class="container legal-content__layout">
            <aside class="legal-summary legal-summary--privacy">
                <p>L’essentiel</p>
                <strong>Vos informations servent uniquement à comprendre votre demande et à vous répondre.</strong>
                <a href="{{ route('contact') }}">Faire une demande <span aria-hidden="true">↗</span></a>
            </aside>

            <div class="legal-sections">
                <article>
                    <span>01</span>
                    <div>
                        <h2>Responsable du traitement</h2>
                        <p><strong>SPLIT DISTRIBUTION</strong><br>Bâtiment E, Veellage de Parilly<br>50 rue Jean Zay<br>69800 Saint-Priest – France<br>Téléphone : <a href="tel:+33472230140">04 72 23 01 40</a></p>
                        <p>Pour toute question relative à vos données ou pour exercer vos droits, écrivez à <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a> ou utilisez le <a href="{{ route('contact') }}">formulaire de contact</a>.</p>
                    </div>
                </article>

                <article>
                    <span>02</span>
                    <div>
                        <h2>Données collectées</h2>
                        <p>Lorsque vous utilisez le formulaire, nous recevons votre nom et prénom, le nom de votre entreprise, votre adresse e-mail, votre numéro de téléphone si vous le renseignez, le type de demande sélectionné et le contenu de votre message.</p>
                        <p>Les champs signalés par un astérisque sont obligatoires. Sans ces informations, Split Distribution ne pourra pas transmettre ni traiter votre demande. Le numéro de téléphone est facultatif.</p>
                    </div>
                </article>

                <article>
                    <span>03</span>
                    <div>
                        <h2>Finalité et base juridique</h2>
                        <p>Ces informations permettent de qualifier votre besoin, transmettre la demande au bon interlocuteur et vous répondre. Le traitement repose sur votre demande de contact et, selon sa nature, sur l’exécution de mesures précontractuelles ou sur l’intérêt légitime de Split Distribution à répondre aux sollicitations professionnelles.</p>
                    </div>
                </article>

                <article>
                    <span>04</span>
                    <div>
                        <h2>Destinataires</h2>
                        <p>Les données sont accessibles aux membres habilités de Split Distribution ainsi qu’aux prestataires techniques strictement nécessaires à l’acheminement et à l’hébergement des messages. Elles ne sont ni vendues ni utilisées pour envoyer une newsletter sans démarche distincte.</p>
                        <p>Sur l’aperçu temporaire hébergé par GitHub Pages, les demandes sont relayées par <a href="https://formsubmit.co/" target="_blank" rel="noopener">FormSubmit</a>. Ce relais sera retiré lorsque le formulaire sera exploité directement par l’hébergement Laravel définitif.</p>
                    </div>
                </article>

                <article>
                    <span>05</span>
                    <div>
                        <h2>Durée de conservation</h2>
                        <p>Les demandes qui ne donnent pas lieu à une relation contractuelle sont conservées pendant trois ans au maximum à compter du dernier échange avec la personne concernée. Lorsqu’une relation contractuelle est engagée, les données utiles sont conservées pendant la durée de cette relation, puis archivées pendant les durées nécessaires au respect des obligations légales et à la défense des droits de Split Distribution.</p>
                    </div>
                </article>

                <article>
                    <span>06</span>
                    <div>
                        <h2>Vos droits</h2>
                        <p>Vous pouvez demander l’accès à vos données, leur rectification, leur effacement, la limitation du traitement ou vous opposer à celui-ci lorsque la loi le permet. Vous pouvez exercer ces droits en écrivant à <a href="mailto:contact@split-distribution.fr">contact@split-distribution.fr</a> ou via notre <a href="{{ route('contact') }}">page de contact</a>.</p>
                        <p>Si vous estimez que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la <a href="https://www.cnil.fr/fr/plaintes" target="_blank" rel="noopener">CNIL</a>.</p>
                    </div>
                </article>

                <article>
                    <span>07</span>
                    <div>
                        <h2>Cookies et mesure d’audience</h2>
                        <p>Dans sa configuration actuelle, le site n’utilise pas de cookies publicitaires ni d’outil de mesure d’audience. Des cookies strictement nécessaires au fonctionnement et à la sécurité du formulaire peuvent être utilisés. Cette rubrique devra être mise à jour si de nouveaux outils sont ajoutés.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
