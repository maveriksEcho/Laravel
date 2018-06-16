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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
        .options({
            processCssUrls: false
        });

    /*  THEME  */

        mix.scripts([
            'resources/assets/theme/js/jquery-1.6.4.min.js',
            'resources/assets/theme/js/css3-mediaqueries.js',
            'resources/assets/theme/js/custom.js',
            'resources/assets/theme/js/tabs.js',
            'resources/assets/theme/js/tweet/jquery.tweet.js',
            'resources/assets/theme/js/superfish-1.4.8/js/hoverIntent.js',
            'resources/assets/theme/js/superfish-1.4.8/js/superfish.js',
            'resources/assets/theme/js/superfish-1.4.8/js/supersubs.js',
            'resources/assets/theme/js/prettyPhoto/js/jquery.prettyPhoto.js',
            'resources/assets/theme/js/poshytip-1.1/src/jquery.poshytip.min.js',
            'resources/assets/theme/js/jquery.flexslider-min.js',
            'resources/assets/theme/js/modernizr.js',
            'resources/assets/theme/js/moveform.js',
            'resources/assets/theme/js/form-validation.js',
            'resources/assets/theme/js/imagesloaded.js'
        ], 'public/js/front.js');

        mix.styles([
            'resources/assets/theme/css/reset.css',
            'resources/assets/theme/css/social.css',
            'resources/assets/theme/css/comments.css',
            'resources/assets/theme/css/widgets.css',
            'resources/assets/theme/css/style.css',
            'resources/assets/theme/css/jquery.tweet.css',
            'resources/assets/theme/css/superfish.css',
            'resources/assets/theme/js/prettyPhoto/css/prettyPhoto.css',
            'resources/assets/theme/js/poshytip-1.1/src/tip-twitter/tip-twitter.css',
            'resources/assets/theme/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css',
            'resources/assets/theme/css/flexslider.css',
            'resources/assets/theme/css/lessframework.css',
            'resources/assets/theme/css/skin.css'
        ], 'public/css/front.css');












