import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../staging/build',
    },
    plugins: [
        laravel({
            input: [
                //'resources/css/app.css',
                'resources/sass/style.scss',
                'resources/js/app.js',
            ],
            publicDirectory: "../../staging",
            refresh: true,
        }),
    ],
});
