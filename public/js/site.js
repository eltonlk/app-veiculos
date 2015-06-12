$(function () {
  Remote.load_json_options($(':input[name="state_id"]'), $(':input[name="city_id"]'), '/cities', {
    prompt: true,
    param_name: 'state_id'
  });
});
