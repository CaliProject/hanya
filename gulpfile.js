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
    mix.sass('app.scss', 'public/assets/css/app.css');

    mix.scripts([
        'plugins/sweetalert.min.js',
        'plugins/summernote.min.js',
        'plugins/summernote-zh-CN.min.js',
        'plugins/toastr.min.js',
        'plugins/dropzone.min.js'
    ],'resources/assets/js/all.js');
    
    mix.scripts([
        'plugins/jquery.min.js',
        'plugins/bootstrap.min.js',
        'app.js'
    ], 'public/assets/js/app.js');
    
    mix.scripts([
        'all.js',
        'admin.js'
    ],'public/assets/js/admin.js');

});
