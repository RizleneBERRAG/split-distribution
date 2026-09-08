<?php $__env->startSection('title', 'Nos solutions | Split Distribution'); ?>

<?php $__env->startSection(
    'description',
    'Découvrez les solutions Split Distribution : climatisation, pompes à chaleur, ventilation, tertiaire, énergies et accessoires professionnels.'
); ?>

<?php $__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/pages/solutions.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body-class', 'page-solutions'); ?>

<?php
    $solutions = [
        [
            'number' => '01',
            'name' => 'Climatisation',
            'eyebrow' => 'Confort thermique',
            'description' => 'Mono-split, multi-split et solutions adaptées aux installations résidentielles comme professionnelles.',
            'image' => 'images/home/climatisation.webp',
            'alt' => 'Unité intérieure de climatisation',
            'width' => 832,
            'height' => 1248,
            'class' => 'solution-card--wide solution-card--climatisation',
            'route' => 'solutions.climatisation',
            'available' => true,
        ],
        [
            'number' => '02',
            'name' => 'Pompes à chaleur',
            'eyebrow' => 'Chauffage & rafraîchissement',
            'description' => 'Des équipements performants pour conjuguer confort, maîtrise énergétique et fiabilité.',
            'image' => 'images/home/pac.webp',
            'alt' => 'Unités extérieures de pompes à chaleur',
            'width' => 735,
            'height' => 495,
            'class' => 'solution-card--compact solution-card--pac',
            'route' => 'solutions.pompes-a-chaleur',
            'available' => true,
        ],
        [
            'number' => '03',
            'name' => 'Ventilation',
            'eyebrow' => 'Qualité de l’air',
            'description' => 'Renouvellement d’air, confort et maîtrise des environnements intérieurs.',
            'image' => 'images/home/ventilation.webp',
            'alt' => 'Installation de ventilation dans des bureaux',
            'width' => 735,
            'height' => 554,
            'class' => 'solution-card--compact solution-card--ventilation',
            'route' => 'solutions.ventilation',
            'available' => true,
        ],
        [
            'number' => '04',
            'name' => 'Solutions tertiaires',
            'eyebrow' => 'Installations techniques',
            'description' => 'Rooftop, groupes d’eau glacée et équipements conçus pour les projets les plus exigeants.',
            'image' => 'images/home/tertiaire.webp',
            'alt' => 'Local technique d’une installation CVC tertiaire',
            'width' => 638,
            'height' => 480,
            'class' => 'solution-card--wide solution-card--tertiaire',
            'route' => 'solutions.tertiaire',
            'available' => true,
        ],
        [
            'number' => '05',
            'name' => 'Énergies',
            'eyebrow' => 'Performance énergétique',
            'description' => 'Des solutions pensées pour répondre aux nouveaux enjeux de consommation et de production.',
            'image' => 'images/home/energies.webp',
            'alt' => 'Panneaux solaires produisant une énergie renouvelable',
            'width' => 992,
            'height' => 1504,
            'class' => 'solution-card--wide solution-card--energies',
            'route' => 'solutions.energies-renouvelables',
            'available' => true,
        ],
        [
            'number' => '06',
            'name' => 'Accessoires',
            'eyebrow' => 'Installation complète',
            'description' => 'Les composants, consommables et équipements indispensables à chaque chantier.',
            'image' => 'images/home/accessoires.webp',
            'alt' => 'Accessoires et composants pour installations CVC',
            'width' => 1535,
            'height' => 1024,
            'class' => 'solution-card--compact solution-card--accessoires',
            'route' => 'solutions.accessoires',
            'available' => true,
        ],
    ];
?>

<?php $__env->startSection('content'); ?>

    <section class="solutions-hero">
        <div class="container solutions-hero__container">

            <div class="solutions-hero__eyebrow">
                <span></span>
                L’expertise Split Distribution
            </div>

            <div class="solutions-hero__grid">
                <div class="solutions-hero__heading">
                    <span class="solutions-hero__index">01 — Solutions</span>

                    <h1>
                        Des solutions pensées
                        <span>pour chaque projet.</span>
                    </h1>
                </div>

                <div class="solutions-hero__aside">
                    <p>
                        Du résidentiel au tertiaire, nous sélectionnons
                        les équipements CVC et énergétiques adaptés aux
                        réalités techniques de chaque installation.
                    </p>

                    <div class="solutions-hero__figures">
                        <div>
                            <strong>06</strong>
                            <span>familles de solutions</span>
                        </div>

                        <div>
                            <strong>01</strong>
                            <span>équipe à vos côtés</span>
                        </div>
                    </div>

                    <a href="#expertises" class="solutions-hero__scroll">
                        Découvrir les expertises
                        <span aria-hidden="true">↓</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="solutions-summary" aria-label="Nos engagements">
        <div class="container solutions-summary__container">
            <div class="solutions-summary__item">
                <span>01</span>
                <p>Une sélection professionnelle et cohérente</p>
            </div>

            <div class="solutions-summary__item">
                <span>02</span>
                <p>Des équipements disponibles et suivis</p>
            </div>

            <div class="solutions-summary__item">
                <span>03</span>
                <p>Un conseil technique avant et après le chantier</p>
            </div>
        </div>
    </section>

    <section class="solutions-overview" id="expertises">
        <div class="container">

            <header class="solutions-section-heading">
                <div class="solutions-section-heading__index">
                    <span>02</span>
                    Nos expertises
                </div>

                <div>
                    <h2>
                        Une gamme complète.
                        <span>Une lecture simple.</span>
                    </h2>

                    <p>
                        Retrouvez l’essentiel de nos métiers et identifiez
                        rapidement la solution adaptée à votre projet.
                    </p>
                </div>
            </header>

            <div class="solutions-grid">
                <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="solution-card <?php echo e($solution['class']); ?>">

                        <?php if($solution['available']): ?>
                            <a
                                href="<?php echo e(route($solution['route'])); ?>"
                                class="solution-card__link"
                                aria-label="Découvrir la solution <?php echo e($solution['name']); ?>"
                            >
                        <?php else: ?>
                            <div
                                class="solution-card__link solution-card__link--pending"
                                aria-label="Page <?php echo e($solution['name']); ?> prochainement disponible"
                            >
                        <?php endif; ?>

                            <img
                                src="<?php echo e(asset($solution['image'])); ?>"
                                alt="<?php echo e($solution['alt']); ?>"
                                width="<?php echo e($solution['width']); ?>"
                                height="<?php echo e($solution['height']); ?>"
                                loading="lazy"
                                decoding="async"
                            >

                            <div class="solution-card__veil"></div>

                            <div class="solution-card__topline">
                                <span class="solution-card__number">
                                    <?php echo e($solution['number']); ?>

                                </span>

                                <span class="solution-card__status">
                                    <?php echo e($solution['available'] ? 'Découvrir' : 'Page prochainement'); ?>

                                </span>
                            </div>

                            <div class="solution-card__content">
                                <span class="solution-card__eyebrow">
                                    <?php echo e($solution['eyebrow']); ?>

                                </span>

                                <div class="solution-card__title-row">
                                    <h3><?php echo e($solution['name']); ?></h3>

                                    <?php if($solution['available']): ?>
                                        <span class="solution-card__arrow" aria-hidden="true">
                                            ↗
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <p><?php echo e($solution['description']); ?></p>
                            </div>

                        <?php if($solution['available']): ?>
                            </a>
                        <?php else: ?>
                            </div>
                        <?php endif; ?>

                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>

    <section class="solutions-support">
        <div class="container solutions-support__container">

            <div class="solutions-support__heading">
                <span class="solutions-support__index">03 — Notre méthode</span>

                <h2>
                    Le bon matériel ne suffit pas.
                    <span>Il faut le bon accompagnement.</span>
                </h2>
            </div>

            <div class="solutions-support__steps">
                <article>
                    <span>01</span>
                    <div>
                        <h3>Comprendre</h3>
                        <p>Vos contraintes, vos délais et les réalités du chantier.</p>
                    </div>
                </article>

                <article>
                    <span>02</span>
                    <div>
                        <h3>Sélectionner</h3>
                        <p>La solution technique cohérente, disponible et durable.</p>
                    </div>
                </article>

                <article>
                    <span>03</span>
                    <div>
                        <h3>Accompagner</h3>
                        <p>De la commande jusqu’au suivi après-vente.</p>
                    </div>
                </article>
            </div>

        </div>
    </section>

    <section class="solutions-cta">
        <div class="container solutions-cta__container">
            <div>
                <span>Un projet à étudier ?</span>
                <h2>Trouvons la bonne solution ensemble.</h2>
            </div>

            <a href="<?php echo e(route('contact')); ?>" class="solutions-cta__button">
                <span>Parler à notre équipe</span>
                <strong aria-hidden="true">↗</strong>
            </a>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/pages/solutions/index.blade.php ENDPATH**/ ?>