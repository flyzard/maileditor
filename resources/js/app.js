import './../css/theme.scss';
import { createInertiaApp } from '@inertiajs/svelte'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
    resolve: (name) => resolvePageComponent(`./Pages/${name}.svelte`, import.meta.glob('./Pages/**/*.svelte')),
    setup({ el, App, props }) {
        new App({ target: el, props })
    }
})


// createInertiaApp({
//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true })
//     return pages[`./Pages/${name}.svelte`]
//   },
//   setup({ el, App, props }) {
//     new App({ target: el, props })
//   },
// })
