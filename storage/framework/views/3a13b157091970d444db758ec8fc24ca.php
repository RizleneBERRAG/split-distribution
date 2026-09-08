<header class="site-header" id="site-header">

    <div class="site-header__container">

        <a
            href="<?php echo e(route('home')); ?>"
            class="site-brand"
            aria-label="Split Distribution - Accueil"
        >
            <div class="site-brand__icon">
                <img
                    src="<?php echo e(asset('images/brand/chameleon-temp.png')); ?>"
                    alt=""
                >
            </div>

            <div class="site-brand__text">
                <strong>Split</strong>
                <span>Distribution</span>
            </div>
        </a>


        <nav class="site-nav" aria-label="Navigation principale">

            <a
                href="<?php echo e(route('home')); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'site-nav__link',
                    'is-active' => request()->routeIs('home')
                ]); ?>"
            >
                Accueil
            </a>

            <a
                href="<?php echo e(route('solutions.index')); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'site-nav__link',
                    'is-active' => request()->routeIs('solutions.*')
                ]); ?>"
            >
                Solutions
            </a>

            <a
                href="<?php echo e(route('services')); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'site-nav__link',
                    'is-active' => request()->routeIs('services')
                ]); ?>"
            >
                Services
            </a>

            <a
                href="<?php echo e(route('entreprise')); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'site-nav__link',
                    'is-active' => request()->routeIs('entreprise')
                ]); ?>"
            >
                L'entreprise
            </a>

        </nav>


        <div class="site-header__actions">

            <a
                href="tel:+33472230140"
                class="site-header__phone"
            >
                04 72 23 01 40
            </a>

            <a
                href="<?php echo e(route('contact')); ?>"
                class="button button--primary"
            >
                Nous contacter
                <span>↗</span>
            </a>

        </div>


        <button
            type="button"
            class="mobile-menu-button"
            id="mobile-menu-button"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
            aria-controls="mobile-menu"
        >
            <span></span>
            <span></span>
        </button>

    </div>


    <nav
        class="mobile-menu"
        id="mobile-menu"
        aria-label="Navigation mobile"
        aria-hidden="true"
    >
        <div class="mobile-menu__inner">
            <div class="mobile-menu__links">
                <a href="<?php echo e(route('home')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['is-active' => request()->routeIs('home')]); ?>">
                    <span>01</span> Accueil
                </a>

                <a href="<?php echo e(route('solutions.index')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['is-active' => request()->routeIs('solutions.*')]); ?>">
                    <span>02</span> Solutions
                </a>

                <a href="<?php echo e(route('services')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['is-active' => request()->routeIs('services')]); ?>">
                    <span>03</span> Services
                </a>

                <a href="<?php echo e(route('entreprise')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['is-active' => request()->routeIs('entreprise')]); ?>">
                    <span>04</span> L'entreprise
                </a>
            </div>

            <div class="mobile-menu__contact">
                <p>Un projet à préparer ?</p>

                <a href="tel:+33472230140" class="mobile-menu__phone">
                    04 72 23 01 40
                </a>

                <a href="<?php echo e(route('contact')); ?>" class="mobile-menu__cta">
                    Nous contacter <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>

    </nav>

</header>
<?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/components/site-header.blade.php ENDPATH**/ ?>