var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    //mezcla el css (sin fucking bootswatch bootstrap
    mix.styles([
        'bower_components/font-awesome/css/font-awesome.min.css',
        'main.css'
    ],'public/css/main.css','resources/assets');

    //mezcla los scripts
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/bootbox.js/bootbox.js',
        'main.js'
    ],'public/js/main.js','resources/assets');

    //copiar las fuentes para fontawesome
    mix.copy('resources/assets/bower_components/font-awesome/fonts','public/fonts');

    //copia el bootstrap
    mix.copy('resources/assets/bower_components/bootswatch/flatly/bootstrap.min.css','public/css/bootstrap.min.css');

});