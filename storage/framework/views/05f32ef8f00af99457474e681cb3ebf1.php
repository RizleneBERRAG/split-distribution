<?php $__env->startSection('title', 'Contact | Split Distribution'); ?>

<?php $__env->startSection(
    'description',
    'Contactez Split Distribution pour vos projets de climatisation, chauffage, ventilation, besoins de stock ou demandes de service après-vente.'
); ?>

<?php $__env->startPush('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/pages/contact.css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body-class', 'page-contact'); ?>

<?php $__env->startSection('content'); ?>
    <section class="contact-intro">
        <div class="contact-intro__grid" aria-hidden="true"></div>

        <div class="container contact-intro__inner">
            <nav class="contact-breadcrumb" aria-label="Fil d’Ariane">
                <a href="<?php echo e(route('home')); ?>">Accueil</a>
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
                        src="<?php echo e(asset('images/contact/technical-advice.webp')); ?>"
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
                    <?php ($staticContactAction = config('contact.static_action')); ?>

                    <?php if(session('status')): ?>
                        <div class="contact-alert contact-alert--success" role="status">
                            <span aria-hidden="true">✓</span>
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if($staticContactAction): ?>
                        <div class="contact-alert contact-alert--success" role="status" data-static-contact-success hidden>
                            <span aria-hidden="true">✓</span>
                            Votre demande a bien été envoyée. Notre équipe reviendra vers vous rapidement.
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="contact-alert contact-alert--error" role="alert">
                            Certains champs sont incomplets ou incorrects. Vérifiez le formulaire.
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e($staticContactAction ?: route('contact.submit')); ?>" class="contact-form">
                        <?php if($staticContactAction): ?>
                            <input type="hidden" name="_subject" value="Nouvelle demande depuis split-distribution.fr">
                            <input type="hidden" name="_template" value="table">
                            <input type="hidden" name="_next" value="<?php echo e(route('contact')); ?>?sent=1#formulaire">
                            <input type="hidden" name="_url" value="<?php echo e(route('contact')); ?>">
                        <?php else: ?>
                            <?php echo csrf_field(); ?>
                        <?php endif; ?>

                        <div class="contact-honeypot" aria-hidden="true">
                            <label for="website">Site internet</label>
                            <input
                                id="website"
                                name="<?php echo e($staticContactAction ? '_honey' : 'website'); ?>"
                                type="text"
                                tabindex="-1"
                                autocomplete="off"
                            >
                        </div>

                        <fieldset class="contact-topics">
                            <legend>Votre besoin *</legend>

                            <div class="contact-topics__grid">
                                <?php $__currentLoopData = [
                                    'project' => ['01', 'Étude de projet'],
                                    'technical' => ['02', 'Conseil technique'],
                                    'availability' => ['03', 'Stock & livraison'],
                                    'after-sales' => ['04', 'Service après-vente'],
                                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => [$number, $label]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label>
                                        <input
                                            type="radio"
                                            name="subject"
                                            value="<?php echo e($value); ?>"
                                            <?php if(old('subject', 'project') === $value): echo 'checked'; endif; ?>
                                        >
                                        <span><small><?php echo e($number); ?></small><?php echo e($label); ?></span>
                                    </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="contact-field-error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </fieldset>

                        <div class="contact-fields">
                            <div class="contact-field">
                                <label for="name">Nom et prénom *</label>
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    value="<?php echo e(old('name')); ?>"
                                    autocomplete="name"
                                    placeholder="Votre nom"
                                    required
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                >
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="contact-field-error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="contact-field">
                                <label for="company">Entreprise *</label>
                                <input
                                    id="company"
                                    name="company"
                                    type="text"
                                    value="<?php echo e(old('company')); ?>"
                                    autocomplete="organization"
                                    placeholder="Nom de votre société"
                                    required
                                    <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                >
                                <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="contact-field-error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="contact-field">
                                <label for="email">Adresse e-mail *</label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    value="<?php echo e(old('email')); ?>"
                                    autocomplete="email"
                                    placeholder="vous@entreprise.fr"
                                    required
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                >
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="contact-field-error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="contact-field">
                                <label for="phone">Téléphone</label>
                                <input
                                    id="phone"
                                    name="phone"
                                    type="tel"
                                    value="<?php echo e(old('phone')); ?>"
                                    autocomplete="tel"
                                    placeholder="06 00 00 00 00"
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                >
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="contact-field-error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> aria-invalid="true" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            ><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="contact-field-error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="contact-form__footer">
                            <label class="contact-consent">
                                <input type="checkbox" name="privacy" value="1" <?php if(old('privacy')): echo 'checked'; endif; ?> required>
                                <span>
                                    J’ai pris connaissance de la
                                    <a href="<?php echo e(route('legal.privacy')); ?>" target="_blank" rel="noopener">
                                        politique de confidentialité
                                    </a>. *
                                </span>
                            </label>

                            <button type="submit" class="contact-submit">
                                Envoyer la demande <span aria-hidden="true">↗</span>
                            </button>
                        </div>

                        <?php $__errorArgs = ['privacy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="contact-field-error"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/pages/contact.blade.php ENDPATH**/ ?>