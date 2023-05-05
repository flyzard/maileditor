import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dynamicImport from 'vite-plugin-dynamic-import'
import { svelte } from "@sveltejs/vite-plugin-svelte";
import preprocess from 'svelte-preprocess';

export default defineConfig({
    server: {
        host: 'notifications.test'
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: 'resources/js/**'
        }),
        dynamicImport(),
        svelte({
            preprocess: preprocess(),
            compilerOptions: {
                dev: true
            },
            prebundleSvelteLibraries: true,
        })
    ],
    optimizeDeps: {
        include: [
            '@inertiajs/inertia',
            '@inertiajs/svelte',
        ]
    },
    mode: 'development'
})
