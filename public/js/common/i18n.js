var I18n = {
  locale: 'pt-BR',

  translate: function (term, options) {
    if (options === undefined) {
      options = {};
    }

    if (typeof term !== "object") {
      term = term.split(".");
    }

    var i = 0,
      translated = I18n.translations[I18n.locale];

    while (i < term.length) {
      if (translated[term[i]] !== undefined) {
        translated = translated[term[i]];
      } else {
        translated = undefined;
        i = term.length;
      }
      i = i + 1;
    }
    return I18n.interpolate(translated, options);
  },

  interpolate: function (text, values) {
    var key;

    if (values === undefined) {
      values = {};
    }
    for (key in values) {
      text = text.replace("%{" + key + "}", values[key]);
    }
    return text;
  },

  t: function (term, options) {
    return I18n.translate(term, options);
  },

  translations: {
    'pt-BR': {
      all: 'Todos',
      date: {
        formats: {
          default: 'dd/mm/yyyy'
        }
      },
      number: {
        currency: {
          format: {
            delimiter: '.',
            precision: 2,
            separator: ',',
            unit: 'R$ '
          }
        }
      },
      loading: 'Carregando...',
      prompt: 'Por favor selecione'
    }
  }
};
