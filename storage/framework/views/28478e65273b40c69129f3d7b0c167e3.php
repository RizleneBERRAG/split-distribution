<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    >

    <title>
        <?php echo $__env->yieldContent('title', 'Split Distribution | Solutions CVC & Énergies'); ?>
    </title>

    <meta
        name="description"
        content="<?php echo $__env->yieldContent(
            'description',
            'Split Distribution accompagne les professionnels dans leurs projets de climatisation, chauffage, ventilation et énergies renouvelables.'
        ); ?>"
    >

    <meta name="theme-color" content="#0c100c">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <meta
        property="og:title"
        content="<?php echo $__env->yieldContent('title', 'Split Distribution | Solutions CVC & Énergies'); ?>"
    >
    <meta
        property="og:description"
        content="<?php echo $__env->yieldContent(
            'description',
            'Split Distribution accompagne les professionnels dans leurs projets de climatisation, chauffage, ventilation et énergies renouvelables.'
        ); ?>"
    >
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta name="twitter:card" content="summary">

    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/css/app.css',
        'resources/js/app.js'
    ]); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/responsive.css'); ?>
</head>

<body class="<?php echo $__env->yieldContent('body-class'); ?>">

    <a class="skip-link" href="#main-content">
        Aller au contenu
    </a>

    <?php if (isset($component)) { $__componentOriginalfdc8967a87956c0a7185abbef03fae20 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdc8967a87956c0a7185abbef03fae20 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdc8967a87956c0a7185abbef03fae20)): ?>
<?php $attributes = $__attributesOriginalfdc8967a87956c0a7185abbef03fae20; ?>
<?php unset($__attributesOriginalfdc8967a87956c0a7185abbef03fae20); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdc8967a87956c0a7185abbef03fae20)): ?>
<?php $component = $__componentOriginalfdc8967a87956c0a7185abbef03fae20; ?>
<?php unset($__componentOriginalfdc8967a87956c0a7185abbef03fae20); ?>
<?php endif; ?>

    <main id="main-content" tabindex="-1">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php if (! (request()->routeIs('home', 'services'))): ?>
        <?php if (isset($component)) { $__componentOriginal4b82f44f31fbd4e7be99b14ea1f36c56 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4b82f44f31fbd4e7be99b14ea1f36c56 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cee-signature','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cee-signature'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4b82f44f31fbd4e7be99b14ea1f36c56)): ?>
<?php $attributes = $__attributesOriginal4b82f44f31fbd4e7be99b14ea1f36c56; ?>
<?php unset($__attributesOriginal4b82f44f31fbd4e7be99b14ea1f36c56); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b82f44f31fbd4e7be99b14ea1f36c56)): ?>
<?php $component = $__componentOriginal4b82f44f31fbd4e7be99b14ea1f36c56; ?>
<?php unset($__componentOriginal4b82f44f31fbd4e7be99b14ea1f36c56); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site-footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1)): ?>
<?php $attributes = $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1; ?>
<?php unset($__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal222c87a019257fb1d70ae0ff46ab02e1)): ?>
<?php $component = $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1; ?>
<?php unset($__componentOriginal222c87a019257fb1d70ae0ff46ab02e1); ?>
<?php endif; ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/layouts/app.blade.php ENDPATH**/ ?>