import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        origin: process.env.VITE_ORIGIN || undefined,
        cors: { origin: /^https?:\/\/(localhost|127\.0\.0\.1)(:\d+)?$/ },
        watch: {
            ignored: ['**/storage/framework/views/**'],
            usePolling: process.env.VITE_USE_POLLING === 'true',
        },
    },
});
