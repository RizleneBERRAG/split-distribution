import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',

                'resources/css/pages/home.css',
                'resources/css/pages/solutions.css',
                'resources/css/pages/climatisation.css',
                'resources/css/pages/pompes-a-chaleur.css',
                'resources/css/pages/contact.css',

                'resources/js/app.js',
            ],

            refresh: true,
        }),

        tailwindcss(),
    ],
});
