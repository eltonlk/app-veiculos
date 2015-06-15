<?php

class DateTimeHelper {

	public static function delocalize($datetime)
	{
    if (!isset($datetime) or gettype($datetime) == 'object')
    {
      return $datetime;
    }
    else if ($datetime == "")
    {
      return null;
    }

    return Carbon::createFromFormat(trans('date.formats.default'), $datetime);
  }

}
