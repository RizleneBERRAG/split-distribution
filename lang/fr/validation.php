<?php

/*
|--------------------------------------------------------------------------
| Messages d'erreur des formulaires, en français
|--------------------------------------------------------------------------
| Seules les règles utilisées par les formulaires du site sont traduites ;
| les autres retombent sur les messages anglais de Laravel.
*/

return [

    'accepted' => 'Merci de cocher cette case pour continuer.',
    'email' => 'Cette adresse e-mail ne semble pas valide.',
    'file' => 'Le fichier n’a pas pu être envoyé.',
    'in' => 'Merci de choisir une option proposée.',
    'max' => [
        'file' => 'Le fichier ne doit pas dépasser :max Ko.',
        'string' => 'Ce champ ne doit pas dépasser :max caractères.',
    ],
    'mimes' => 'Formats acceptés : :values.',
    'min' => [
        'string' => 'Merci d’écrire au moins :min caractères.',
    ],
    'required' => 'Ce champ est obligatoire.',
    'string' => 'Ce champ doit être un texte.',
    'uploaded' => 'Le fichier n’a pas pu être envoyé.',

    // Champ piège anti-robots : il doit rester vide
    'custom' => [
        'website' => [
            'max' => 'Votre demande n’a pas pu être envoyée.',
        ],
    ],

    'attributes' => [],

];
