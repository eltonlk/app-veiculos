var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.less();

  mix.coffee();

  mix.copy('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/vendor/bootstrap.css')
    .copy('node_modules/bootstrap/dist/css/bootstrap-theme.css', 'public/css/vendor/bootstrap-theme.css')
    .copy('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css', 'public/css/vendor/bootstrap-datepicker.css');

  mix.copy('node_modules/bootstrap/dist/fonts/**', 'public/fonts/');

  mix.copy('node_modules/jquery/dist/jquery.js', 'public/js/vendor/jquery.js')
    .copy('node_modules/jquery-ujs/src/rails.js', 'public/js/vendor/jquery-ujs.js')
    .copy('node_modules/jquery-maskmoney/dist/jquery.maskMoney.js', 'public/js/vendor/jquery.maskMoney.js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/vendor/bootstrap.js')
    .copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js', 'public/js/vendor/bootstrap-datepicker.js')
    .copy('node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js', 'public/js/vendor/bootstrap-datepicker-locale.pt-BR.js');


  mix.styles([
    'vendor/bootstrap.css'
  ], 'public/output/site.css', 'public/css');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/jquery-ujs.js',
    'vendor/bootstrap.js',
    'common/i18n.js',
    'common/remote.js',
    'site.js'
  ], 'public/output/site.js', 'public/js');

  mix.styles([
    'vendor/bootstrap.css',
    'vendor/bootstrap-datepicker.css',
    'base.css',
    'common.css'
  ], 'public/output/app.css', 'public/css');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/jquery-ujs.js',
    'vendor/jquery.maskMoney.js',
    'vendor/bootstrap.js',
    'vendor/bootstrap-datepicker.js',
    'vendor/bootstrap-datepicker-locale.pt-BR.js',
    'common/i18n.js',
    'common/remote.js',
    'app.js'
  ], 'public/output/app.js', 'public/js');

  mix.version([
    'public/output/site.css',
    'public/output/site.js',
    'public/output/app.css',
    'public/output/app.js'
  ]);
});
