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

 //mezcla el css
 mix.styles([
     'bower_components/bootstrap/dist/css/bootstrap.min.css',
     'main.css'
 ],'public/css/main.css','resources/assets');

});
