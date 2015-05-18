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

}
