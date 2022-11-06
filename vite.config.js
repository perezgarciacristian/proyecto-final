import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
<<<<<<< HEAD
                'resources/css/materialize.css',
                'resources/js/materialize.js',
                'resources/css/bootstrap.css',
                'resources/js/bootstrap.js',
=======
                'resources/css/materialize.css',  
                'resources/js/materialize.js'
>>>>>>> f1d335759a585cc729e72eadb3427012330bf35a
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
