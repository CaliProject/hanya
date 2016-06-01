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
    mix.sass('app.scss', 'public/assets/css/app.css')
        .scriptsIn('resources/assets/js/plugins','resources/assets/js/all.js')
        .scripts([
            'plugins/1.jquery.min.js',
            'plugins/bootstrap.min.js'
        ], 'public/assets/js/app.js')
        .scripts([
            'all.js',
            'admin.js'
        ],'public/assets/js/admin.js');

});
