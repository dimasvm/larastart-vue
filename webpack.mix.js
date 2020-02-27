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

mix.styles([
    'public/iconfonts/mdi/css/materialdesignicons.min.css',
    'public/iconfonts/ionicons/css/ionicons.css',
    'public/iconfonts/typicons/src/font/typicons.css',
    'public/iconfonts/flag-icon-css/css/flag-icon.min.css',
    'resources/assets/css/vendor.bundle.base.css',
    'resources/assets/css/vendor.bundle.addons.css',
    'resources/assets/css/style.css',
    'resources/assets/css/layout-style.css'
],
'public/css/all.css')
.copy('public/iconfonts/mdi/fonts', 'public/fonts');

mix.js('resources/assets/js/app.js', 'public/js')
// .scripts([
//     // 'resources/assets/js/vendor.bundle.base.js',
//     // 'resources/assets/js/vendor.bundle.addons.js',
//     // 'resources/assets/js/off-canvas.js',
//     // 'resources/assets/js/dashboard.js',
//     // 'resources/assets/js/vue.js',
//     // 'resources/assets/js/vue-router.js',
//     'resources/assets/js/app.js',
// ],
// 'public/js/all.js')

