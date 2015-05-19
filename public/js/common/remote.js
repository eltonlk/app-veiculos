var Remote = {
  load_json_options: function ($trigger, $input, url, settings) {
    settings = Remote.define_settings(settings);

    $trigger.change(function () {
      var value = $(this).val(),
        $option = $('<option>').text(I18n.t('loading'));

      $input.html($option).prop('disabled', true);

      if (value === undefined || value === '') {
        $input.html(null).prop('disabled', false);

        Remote.append_options($input, [], settings);
      } else {
        $.ajax({
          dataType: "json",
          url: url,
          data: settings.param_name + '=' + value,
          success: function (json) {
            $input.html(null).prop('disabled', false);

            Remote.append_options($input, json, settings);
          }
        });
      }
    });
  },

  define_settings: function(settings) {
    if (settings === undefined) {
      settings = {};
    }

    return $.extend({
      param_name: 'id',
      field_name: 'name',
      empty: false,
      prompt: false
    }, settings);
  },

  append_blank_option: function ($input, settings) {
    if (settings.empty === false && settings.prompt === false) {
      return;
    }

    var $option = $('<option value="">');

    if (settings.prompt === true) {
      $option.html(I18n.t('prompt'));
    } else if (settings.empty !== true) {
      $option.html(settings.empty);
    }

    $input.append($option);
  },

  append_options: function ($input, json, settings) {
    Remote.append_blank_option($input, settings);

    $.each(json, function (index, object) {
      var text = object[settings.field_name],
        $option = $('<option>').html(text).attr('value', object.id);

      $input.append($option);
    });
  }
};
