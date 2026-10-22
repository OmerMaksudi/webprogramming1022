import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

const codespacesViteHost =
    process.env.CODESPACE_NAME && process.env.GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN
        ? `${process.env.CODESPACE_NAME}-5173.${process.env.GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}`
        : null;

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        origin: codespacesViteHost ? `https://${codespacesViteHost}` : 'http://localhost:5173',
        ...(codespacesViteHost && {
            hmr: {
                host: codespacesViteHost,
                protocol: 'wss',
                clientPort: 443,
            },
        }),
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
