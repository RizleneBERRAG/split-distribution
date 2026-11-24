<?php

/*
|--------------------------------------------------------------------------
| Demande de devis
|--------------------------------------------------------------------------
| Les choix proposés dans le parcours « Demander un devis ».
| Les clés sont enregistrées en base ; les libellés sont affichés.
| Pour ajouter ou retirer un choix, il suffit de modifier ces listes.
*/

return [

    'families' => [
        'climatisation' => ['label' => 'Climatisation', 'eyebrow' => 'Confort thermique', 'image' => 'images/home/climatisation.webp'],
        'pompes-a-chaleur' => ['label' => 'Pompes à chaleur', 'eyebrow' => 'Chauffage', 'image' => 'images/home/pac.webp'],
        'ventilation' => ['label' => 'Ventilation', 'eyebrow' => 'Qualité de l’air', 'image' => 'images/home/ventilation.webp'],
        'tertiaire' => ['label' => 'Tertiaire', 'eyebrow' => 'Solutions techniques', 'image' => 'images/home/tertiaire.webp'],
        'energies-renouvelables' => ['label' => 'Énergies', 'eyebrow' => 'Énergie', 'image' => 'images/home/energies.webp'],
        'accessoires' => ['label' => 'Accessoires', 'eyebrow' => 'Installation', 'image' => 'images/home/accessoires.webp'],
        'plusieurs' => ['label' => 'Plusieurs familles', 'eyebrow' => 'Ou je ne sais pas encore', 'image' => null],
    ],

    'projects' => [
        'neuf' => 'Construction neuve',
        'renovation' => 'Rénovation',
        'remplacement' => 'Remplacement d’un équipement',
    ],

    'buildings' => [
        'maison' => 'Maison',
        'logement-collectif' => 'Logement collectif',
        'commerce' => 'Commerce',
        'bureaux' => 'Bureaux',
        'industrie' => 'Industrie ou entrepôt',
        'autre' => 'Autre',
    ],

    'timelines' => [
        'urgent' => 'Au plus vite',
        'un-mois' => 'Dans le mois',
        'trois-mois' => 'D’ici trois mois',
        'plus-tard' => 'Pas encore daté',
    ],

    'profiles' => [
        'installateur' => 'Installateur ou artisan',
        'bureau-etudes' => 'Bureau d’études',
        'entreprise' => 'Entreprise ou gestionnaire de bâtiment',
        'autre' => 'Autre',
    ],

    // Pièce jointe facultative (liste de références, plan, photo…)
    'attachment' => [
        'max_kb' => 10240,
        'mimes' => ['pdf', 'jpg', 'jpeg', 'png', 'webp', 'xls', 'xlsx', 'csv', 'doc', 'docx'],
    ],

];
