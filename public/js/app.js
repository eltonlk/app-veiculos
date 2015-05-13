$(function () {
  Remote.load_json_options($(':input#state_id'), $(':input#city_id'), '/cities', {
    prompt: true,
    param_name: 'state_id'
  });
});
