var elixir = require('laravel-elixir');

elixir(function(mix) {
  mix.less();

  mix.coffee();

  mix.styles([
    'vendor/bootstrap.css'
  ], 'public/output/site.css', 'public/css');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/jquery_ujs.js',
    'vendor/bootstrap.js',
    'common/i18n.js',
    'common/remote.js',
    'site.js'
  ], 'public/output/site.js', 'public/js');

  mix.styles([
    'vendor/bootstrap.css',
    'common/helpers.css',
    'common/panel.css',
    'common/table.css'
  ], 'public/output/app.css', 'public/css');

  mix.scripts([
    'vendor/jquery.js',
    'vendor/jquery_ujs.js',
    'vendor/bootstrap.js',
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
