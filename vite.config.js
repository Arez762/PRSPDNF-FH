import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/custom/custom.js', // Pastikan file custom.js ditambahkan di sini
            ],
            refresh: true,
        }),
    ],
});
