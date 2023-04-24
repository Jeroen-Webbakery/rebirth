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
mix.js('assets/js/main.js', 'assets/js/main.min.js')
    .sass('sass/rebirth/rebirth.scss', 'assets/css/main.min.css')
    .options({
        processCssUrls: false,
    });

// Version the files
if (mix.inProduction()) {
    mix.setPublicPath(`./`);
    mix.version([
        'assets/js/rebirth.min.js',
        'assets/css/rebirth.min.css',
    ]);
}


const domain = 'rebirth.test'; // <= EDIT THIS
const homedir = require('os').homedir();

// The mix script:
mix.browserSync({
    proxy: 'https://' + domain,
    host: domain,
    open: 'external',
    https: {
        key: homedir + '/.config/valet/Certificates/' + domain + '.key',
        cert: homedir + '/.config/valet/Certificates/' + domain + '.crt'
    },
    notify: true, //Enable or disable notifications
})

