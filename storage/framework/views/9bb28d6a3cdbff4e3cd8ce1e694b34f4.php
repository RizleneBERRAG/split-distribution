<?php $__env->startSection('title', 'Accessoires CVC | Split Distribution'); ?>

<?php $__env->startSection(
    'description',
    'Le catalogue d’accessoires CVC Split Distribution est en préparation. Contactez notre équipe pour identifier les composants adaptés à votre chantier.'
); ?>

<?php $__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/pages/accessoires.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body-class', 'page-accessoires'); ?>

<?php $__env->startSection('content'); ?>
    <section class="access-hero">
        <div class="container access-hero__shell">
            <nav class="access-breadcrumb" aria-label="Fil d’Ariane">
                <a href="<?php echo e(route('solutions.index')); ?>">Solutions</a>
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
                        <a href="<?php echo e(route('contact')); ?>">Demander une référence <span aria-hidden="true">↗</span></a>
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
                            src="<?php echo e(asset('images/home/accessoires.webp')); ?>"
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
                        <a href="<?php echo e(route('contact')); ?>">Écrire à l’équipe <span aria-hidden="true">↗</span></a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/pages/solutions/accessoires.blade.php ENDPATH**/ ?>