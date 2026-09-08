<?php
    $routeName = request()->route()?->getName();

    $content = match ($routeName) {
        'solutions.index' => [
            'eyebrow' => 'Performance énergétique',
            'title' => 'Les CEE entrent aussi dans la réflexion.',
            'text' => 'Nous regardons l’éligibilité du projet dès le choix de la solution, sans perdre de vue la cohérence technique.',
        ],
        'solutions.climatisation' => [
            'eyebrow' => 'Climatisation & CEE',
            'title' => 'Le confort peut aussi générer des économies.',
            'text' => 'Selon l’équipement et l’opération, le dispositif CEE peut être étudié dès la préparation du projet.',
        ],
        'solutions.pompes-a-chaleur' => [
            'eyebrow' => 'Pompes à chaleur & CEE',
            'title' => 'Valoriser une solution performante.',
            'text' => 'Nous intégrons la question des CEE à l’étude de votre pompe à chaleur, sous réserve de l’éligibilité de l’opération.',
        ],
        'solutions.ventilation' => [
            'eyebrow' => 'Ventilation & CEE',
            'title' => 'La performance se pense dans son ensemble.',
            'text' => 'Certains travaux de ventilation peuvent relever du dispositif CEE. L’analyse se fait au cas par cas.',
        ],
        'solutions.tertiaire' => [
            'eyebrow' => 'Tertiaire & CEE',
            'title' => 'Une dépense énergétique à regarder de près.',
            'text' => 'En tertiaire, nous vous aidons à identifier les opérations qui méritent une étude d’éligibilité CEE.',
        ],
        'solutions.energies-renouvelables' => [
            'eyebrow' => 'Énergies & CEE',
            'title' => 'Faire converger technique et économies d’énergie.',
            'text' => 'Le dispositif CEE est pris en compte au bon moment, selon la nature des travaux et les critères applicables.',
        ],
        'solutions.accessoires' => [
            'eyebrow' => 'Équipement & performance',
            'title' => 'Chaque composant compte dans le résultat final.',
            'text' => 'La sélection des accessoires reste liée à la performance globale de l’installation et à l’éligibilité éventuelle du projet.',
        ],
        'entreprise' => [
            'eyebrow' => 'Notre accompagnement',
            'title' => 'Les CEE, intégrés sans compliquer le chantier.',
            'text' => 'Notre équipe vous aide à poser la question de l’éligibilité assez tôt pour préserver une préparation fluide.',
        ],
        'contact' => [
            'eyebrow' => 'Votre opération',
            'title' => 'Un projet éligible aux CEE ? Parlons-en.',
            'text' => 'Décrivez-nous vos travaux : nous pourrons vous orienter sur les premières informations à réunir.',
        ],
        default => [
            'eyebrow' => 'Économies d’énergie',
            'title' => 'Le dispositif CEE fait partie des pistes étudiées.',
            'text' => 'L’accompagnement dépend de la nature des travaux et de l’éligibilité de chaque opération.',
        ],
    };
?>

<aside class="cee-signature" aria-labelledby="cee-signature-title">
    <div class="container cee-signature__inner">
        <div class="cee-signature__mark">
            <img
                src="<?php echo e(asset('images/brand/cee-certificates.png')); ?>"
                alt="Certificats d’économies d’énergie — CEE"
                width="738"
                height="240"
                loading="lazy"
            >
        </div>

        <div class="cee-signature__copy">
            <span><?php echo e($content['eyebrow']); ?></span>
            <h2 id="cee-signature-title"><?php echo e($content['title']); ?></h2>
            <p><?php echo e($content['text']); ?></p>
        </div>

        <a href="<?php echo e(route('contact')); ?>">
            Vérifier mon projet <span aria-hidden="true">↗</span>
        </a>
    </div>
</aside>
<?php /**PATH /home/runner/work/split-distribution/split-distribution/resources/views/components/cee-signature.blade.php ENDPATH**/ ?>