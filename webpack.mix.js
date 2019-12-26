let mix = require('laravel-mix');

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .js('assets/javascripts/app.js', 'js')
    .sass('assets/stylesheets/app.css', 'css')
    .version();