let mix = require('laravel-mix');

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


mix.setPublicPath('./')

// Account
mix.js('js/rebirth.js', 'js/rebirth.min.js')
    .sass('sass/rebirth/rebirth.scss', 'css/rebirth.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'js/rebirth.min.js',
        'css/rebirth.min.css',
    ]);
}


