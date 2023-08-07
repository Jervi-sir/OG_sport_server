import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                //'resources/css/app.css',
                'resources/materialize/css/materialize.css',
                'resources/materialize/js/materialize.min.js',

                'resources/js/app.js',
                'resources/css/general.scss',
                'resources/css/index.scss',
                'resources/css/matchDetails.scss',
                'resources/css/menu.scss',
                'resources/css/myMatches.scss',
                'resources/css/myTeam.scss',
                'resources/css/popup.scss',
            ],
            refresh: true,
        }),
    ],
});
