@extends('layouts.app')

@section('title', 'Énergies renouvelables & photovoltaïque | Split Distribution')

@section(
    'description',
    'Split Distribution accompagne les professionnels dans la sélection de solutions photovoltaïques cohérentes avec le bâtiment, les usages et les objectifs énergétiques.'
)

@push('styles')
    @vite('resources/css/pages/energies-renouvelables.css')
@endpush

@section('body-class', 'page-energies')

@section('content')
    <section class="energy-hero">
        <div class="energy-hero__sun" aria-hidden="true"></div>

        <div class="container">
            <nav class="energy-breadcrumb" aria-label="Fil d’Ariane">
                <a href="{{ route('solutions.index') }}">Solutions</a>
                <span aria-hidden="true">/</span>
                <span>Énergies renouvelables</span>
            </nav>

            <div class="energy-hero__heading">
                <div>
                    <p class="energy-kicker"><span aria-hidden="true"></span> Production locale</p>
                    <h1>L’énergie est déjà là.<br><em>Capturons-la.</em></h1>
                </div>

                <div class="energy-hero__intro">
                    <p>
                        Du potentiel de la toiture au pilotage de l’installation, nous aidons
                        à composer une réponse photovoltaïque lisible, dimensionnée et durable.
                    </p>
                    <div>
                        <a href="{{ route('contact') }}">Étudier mon projet <span aria-hidden="true">↗</span></a>
                        <a href="#trajectoire">Voir la trajectoire <span aria-hidden="true">↓</span></a>
                    </div>
                </div>
            </div>

            <div class="energy-hero__stage">
                <figure class="energy-hero__photo">
                    <img
                        src="{{ asset('images/home/energies.webp') }}"
                        alt="Panneaux photovoltaïques éclairés par le soleil"
                        width="992"
                        height="1504"
                    >
                    <figcaption><span>Source</span> Solaire</figcaption>
                </figure>

                <div class="energy-orbit" aria-label="Parcours de l’énergie, de la toiture aux usages">
                    <div class="energy-orbit__ring" aria-hidden="true"></div>
                    <div class="energy-orbit__core">
                        <span>Flux actif</span>
                        <strong>100<small>%</small></strong>
                        <em>Énergie disponible</em>
                    </div>
                    <div class="energy-orbit__point energy-orbit__point--one"><span>01</span><strong>Capter</strong></div>
                    <div class="energy-orbit__point energy-orbit__point--two"><span>02</span><strong>Convertir</strong></div>
                    <div class="energy-orbit__point energy-orbit__point--three"><span>03</span><strong>Piloter</strong></div>
                </div>

                <aside class="energy-hero__reading">
                    <span>Lecture du projet</span>
                    <div><strong>Toiture</strong><em>Exposition · surface</em></div>
                    <div><strong>Production</strong><em>Puissance · rendement</em></div>
                    <div><strong>Usages</strong><em>Profil · autoconsommation</em></div>
                </aside>
            </div>

            <div class="energy-hero__baseline">
                <span>Photovoltaïque</span>
                <span>Micro-onduleurs</span>
                <span>Stockage</span>
                <span>Pilotage</span>
            </div>
        </div>
    </section>

    <section class="energy-trajectory" id="trajectoire">
        <div class="container">
            <header class="energy-trajectory__heading">
                <p class="energy-index"><span>01</span> La trajectoire</p>
                <div>
                    <p class="energy-kicker energy-kicker--dark"><span aria-hidden="true"></span> Du rayon à l’usage</p>
                    <h2>Une chaîne simple.<br><em>Une cohérence complète.</em></h2>
                </div>
            </header>

            <div class="energy-flow">
                <article>
                    <span>01</span>
                    <i aria-hidden="true"></i>
                    <small>Surface utile</small>
                    <h3>Capter</h3>
                    <p>Lire l’orientation, l’ombrage et la surface réellement exploitable.</p>
                </article>
                <article>
                    <span>02</span>
                    <i aria-hidden="true"></i>
                    <small>Courant produit</small>
                    <h3>Convertir</h3>
                    <p>Associer modules et conversion pour une architecture cohérente.</p>
                </article>
                <article>
                    <span>03</span>
                    <i aria-hidden="true"></i>
                    <small>Énergie disponible</small>
                    <h3>Distribuer</h3>
                    <p>Relier la production au bâtiment, à ses équipements et à son réseau.</p>
                </article>
                <article>
                    <span>04</span>
                    <i aria-hidden="true"></i>
                    <small>Vision durable</small>
                    <h3>Piloter</h3>
                    <p>Suivre la production et garder une lecture claire de l’installation.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="energy-balance">
        <div class="container energy-balance__grid">
            <header>
                <p class="energy-index energy-index--light"><span>02</span> Le juste équilibre</p>
                <p class="energy-kicker energy-kicker--light"><span aria-hidden="true"></span> Dimensionner avant d’additionner</p>
                <h2>Produire beaucoup<br>ne veut pas toujours dire <em>produire juste.</em></h2>
                <p class="energy-balance__lead">
                    Le bon ensemble met en regard potentiel du site, profil de consommation,
                    matériel et évolution future du besoin.
                </p>
            </header>

            <div class="energy-balance__dial" aria-label="Les quatre paramètres d’un projet photovoltaïque cohérent">
                <div class="energy-balance__circle" aria-hidden="true">
                    <span></span><span></span><span></span><span></span>
                </div>
                <div class="energy-balance__center">
                    <small>Projet</small>
                    <strong>Aligné</strong>
                </div>
                <article class="energy-balance__item energy-balance__item--one"><span>01</span><strong>Bâtiment</strong><small>Toiture & implantation</small></article>
                <article class="energy-balance__item energy-balance__item--two"><span>02</span><strong>Usage</strong><small>Consommation réelle</small></article>
                <article class="energy-balance__item energy-balance__item--three"><span>03</span><strong>Matériel</strong><small>Ensemble compatible</small></article>
                <article class="energy-balance__item energy-balance__item--four"><span>04</span><strong>Évolution</strong><small>Besoin à venir</small></article>
            </div>
        </div>
    </section>

    <section class="energy-components">
        <div class="container">
            <header class="energy-components__heading">
                <p class="energy-index"><span>03</span> L’ensemble technique</p>
                <div>
                    <p class="energy-kicker energy-kicker--dark"><span aria-hidden="true"></span> Chaque élément a sa place</p>
                    <h2>Pas une collection de produits.<br><em>Un système.</em></h2>
                </div>
            </header>

            <div class="energy-components__list">
                <article><span>01</span><h3>Modules</h3><p>Technologie, puissance, format et intégration adaptés à la toiture.</p><strong>La surface active</strong></article>
                <article><span>02</span><h3>Conversion</h3><p>Onduleur ou micro-onduleurs choisis selon l’architecture du projet.</p><strong>Le cœur électrique</strong></article>
                <article><span>03</span><h3>Protection</h3><p>Coffrets et composants pour compléter une installation maîtrisée.</p><strong>La continuité</strong></article>
                <article><span>04</span><h3>Supervision</h3><p>Une lecture accessible de la production et du fonctionnement.</p><strong>La visibilité</strong></article>
            </div>
        </div>
    </section>

    <section class="energy-cta">
        <div class="container energy-cta__grid">
            <div>
                <p class="energy-index"><span>04</span> Passer au concret</p>
                <h2>Commençons par le potentiel de <em>votre projet.</em></h2>
            </div>
            <div>
                <p>Une toiture, un besoin ou une première étude : transmettez-nous les éléments disponibles.</p>
                <a href="{{ route('contact') }}">Échanger avec l’équipe <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>
@endsection
