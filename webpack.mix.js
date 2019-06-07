const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/font-awesome/css/', 'public/fonts/font-awesome/css');
mix.copy('node_modules/font-awesome/fonts/', 'public/fonts/font-awesome/fonts');