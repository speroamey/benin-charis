// webpack.mix.js

let mix = require('laravel-mix');

// mix.styles([
//     'public/css/app.css',
//     'public/css/bootstrap.min.css',
//     'public/css/bootstrap-grid.min.css',
//     'public/css/bootstrap-reboot.min.css',
//     'public/css/animate.css',
//     'public/css/owl.carousel.css',
//     'public/css/owl.theme.css',
//     'public/css/style.css',
//     'public/css/owl.transitions.css',
//     'public/css/magnific-popup.css',
//     'public/css/jquery.countdown.css',
//     'public/css/colors/scheme-01.css',
//     'public/css/coloring.css',
//    'public/revolution/css/settings.css',
//    'public/revolution/css/layers.css',
//    'public/revolution/css/navigation.css',
// ], 'public/css/all.scss');

// mix.sass('public/css/all.scss','public/css/all.css');

// mix.styles([
//     'public/css/app.css',
//     'public/css/bootstrap.min.css',
//     'public/css/bootstrap-grid.min.css',
//     'public/css/bootstrap-reboot.min.css',
//     'public/css/animate.css',
//     'public/css/owl.carousel.css',
//     'public/css/owl.theme.css',
//     'public/css/style.css',
//     'public/css/owl.transitions.css',
//     'public/css/magnific-popup.css',
//     'public/css/jquery.countdown.css',
//     'public/css/colors/scheme-01.css',
//     'public/css/colors/scheme-01.css',
//     'public/css/coloring.css',
// ], 'public/css/all.scss');

// mix.scripts([

// ], '');

mix.combine([
    'public/js/jquery.min.js',
    'public/js/bootstrap.min.js',
    'public/js/jquery.isotope.min.js',
    'public/js/jquery.magnific-popup.min.js',
    'public/js/jquery.stellar.min.js',
    'public/js/jquery.plugin.js',
    'public/js/jquery.countdown.js',
    'public/js/jquery.countTo.js',
    'public/js/wow.min.js',
    'public/js/owl.carousel.js',
    'public/js/validation.js',
    'public/js/easing.js',
    'public/js/typed.js',
    'public/js/jarallax.js',
    'public/js/enquire.min.js',
    'public/js/designesia.js',
    'public/revolution/js/jquery.themepunch.tools.min.js',
    'public/revolution/js/jquery.themepunch.revolution.min.js',
    'public/revolution/js/extensions/revolution.extension.video.min.js',
    'public/revolution/js/extensions/revolution.extension.slideanims.min.js',
    'public/revolution/js/extensions/revolution.extension.layeranimation.min.js',
    'public/revolution/js/extensions/revolution.extension.navigation.min.js',
    'public/revolution/js/extensions/revolution.extension.actions.min.js',
    'public/revolution/js/extensions/revolution.extension.kenburn.min.js',
    'public/revolution/js/extensions/revolution.extension.migration.min.js',
    'public/revolution/js/extensions/revolution.extension.parallax.min.js'
],'public/js/vendor.min.js');
