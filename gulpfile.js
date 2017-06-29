var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass('app.scss');


    mix.styles([
        'libs/bootstrap.min.css',
        'libs/select2.min.css',
        'libs/app.css',
        'libs/my.css'
    ]);


    mix.scripts([
       'libs/jquery.min.js',
        'libs/select2.min.js',
        'select2.min.js'
    ]);




});
