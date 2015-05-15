$(function () {
  $('.datepicker').datepicker({
    autoclose: true,
    format: I18n.t('date.formats.default'),
    language: I18n.locale,
    todayHighlight: true
  });

  Remote.load_json_options($(':input#state_id'), $(':input#city_id'), '/cities', {
    prompt: true,
    param_name: 'state_id'
  });
});
