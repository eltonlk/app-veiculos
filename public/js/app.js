$(function () {
  $('.datepicker').datepicker({
    autoclose: true,
    format: I18n.t('date.formats.default'),
    language: I18n.locale,
    todayHighlight: true
  });

  $(':input.currency').maskMoney({
    prefix: I18n.t('number.currency.format.unit'),
    thousands: I18n.t('number.currency.format.delimiter'),
    decimal: I18n.t('number.currency.format.separator'),
    precision: I18n.t('number.currency.format.precision')
  });

  $('a.link-to-search').click(function (e) {
    if ($('.form-search').is(':visible')) {
      $('.form-search').slideUp();
    } else {
      $('.form-search').slideDown();
    }

    e.preventDefault();
  })

  Remote.load_json_options($(':input[name="state_id"]'), $(':input[name="city_id"]'), '/cities', {
    prompt: true,
    param_name: 'state_id'
  });
});
