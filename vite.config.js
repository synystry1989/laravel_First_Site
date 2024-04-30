import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/searchBar.js',
                'resources/css/app.css',
                'resources/css/cssNavBlade.css',
            ],
            refresh: true,
        }),
    ],
});
