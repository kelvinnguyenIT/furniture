const mix = require('laravel-mix');
mix.browserSync('http://127.0.0.1:8000');

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

mix.babel(['resources/js/home/cms.js', 'resources/js/common/common.js'], 'public/js/home/cms.js');
mix.js('public/js/home/cms.js', 'public/js/home/cms.min.js');

mix.babel(['resources/js/admin/cms.js', 'resources/js/common/common.js'], 'public/js/admin/cms.js');
mix.js('public/js/admin/cms.js', 'public/js/admin/cms.min.js');

mix.sass('resources/sass/app.scss', 'public/css/home/app.min.css');
