import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import fs from 'fs';  
// const host = 'https://staging.radartyres.com'; 
export default defineConfig({
    build: {
        outDir: '../build',
    },
    plugins: [
        laravel({
            input: [
                //'resources/css/app.css',
                'resources/sass/style.scss',
                'resources/js/app.js',
            ],
            publicDirectory: "../",
            refresh: true,
        }),
    ],    
    // server: { 
    //     host, 
    //     hmr: { host }, 
    //     https: { 
    //         key: fs.readFileSync(`/path/to/${host}.key`), 
    //         cert: fs.readFileSync(`/path/to/${host}.crt`), 
    //     }, 
    // }, 
});
