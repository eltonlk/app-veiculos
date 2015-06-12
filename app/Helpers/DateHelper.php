<?php

class DateHelper {

	public static function delocalize($date)
	{
    if (!isset($date) or gettype($date) == 'object')
    {
      return $date;
    }
    else if ($date == "")
    {
      return null;
    }

    return Carbon::createFromFormat(trans('date.formats.default'), $date);
  }

  public static function yearOptionsForSelect($start = 1, $end = 1950)
  {
    $options = [];
    $start = date('Y');

    foreach (range($start, $end) as $index => $year)
    {
      $options[$year] = $year;
    }

    return $options;
  }

}
