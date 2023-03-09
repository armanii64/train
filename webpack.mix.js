const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/common/base.js', 'public/js/common')
    .js('resources/js/common/delete.js', 'public/js/common')
    .js('resources/js/composition/changeStatus.js', 'public/js/composition')
    .js('resources/js/rollingStock/create.js', 'public/js/rollingStock')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
