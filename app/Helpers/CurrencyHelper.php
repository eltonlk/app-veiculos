<?php

class CurrencyHelper {

  public static function delocalize($amount)
  {
    $amount = (string) $amount;

    $delimiter = trans('number.currency.format.delimiter');
    $separator = trans('number.currency.format.separator');
    $unit = trans('number.currency.format.unit');

    $amount = str_replace($unit, '', $amount);

    $amount = str_replace($delimiter, '', $amount);
    $amount = str_replace($separator, '.', $amount);

    return (float) $amount;
  }

}
