<?php

class I18nHelper {

  public static function n2c($amount)
  {
    $amount = (float) $amount;

    $delimiter = trans('number.currency.format.delimiter');
    $precision = (int) trans('number.currency.format.precision');
    $separator = trans('number.currency.format.separator');
    $unit = trans('number.currency.format.unit');

    $amount = number_format($amount, $precision);

    $amount = str_replace(',', '_', $amount);
    $amount = str_replace('.', $separator, $amount);
    $amount = str_replace('_', $delimiter, $amount);

    return $unit . ' ' . $amount;
  }

	public static function l($date, $format = null)
	{
		if (isset($date)) {
      if (!isset($format)) {
        $format = 'default';
      }

      return $date->format(trans('date.formats.' . $format));
		} else {
		  return '';
		}
	}

}
