<?php

return [
    'recipient' => env('CONTACT_EMAIL')
        ?: 'contact@split-distribution.fr',

    'static_action' => env('CONTACT_FORM_ACTION'),
];
