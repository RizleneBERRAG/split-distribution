import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/responsive.css',

                'resources/css/pages/accueil.css',
                'resources/css/pages/pompes-a-chaleur.css',
                'resources/css/pages/contact.css',
                'resources/css/pages/devis.css',
                'resources/css/pages/services.css',
                'resources/css/pages/entreprise.css',
                'resources/css/pages/legal.css',

                'resources/js/app.js',
            ],

            refresh: true,
        }),

        tailwindcss(),
    ],
});
