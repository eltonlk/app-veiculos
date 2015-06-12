<?php

class BulkHelper {

  public static function render($collection, $options = [])
  {
    $options = array_merge([
      'export'   => [ 'pdf', 'csv' ],
      'paginate' => true,
    ], $options);

    return '<div class="bulk">' .
        self::pagination($collection, $options) .
        self::export($options) .
      '</div>';
  }

  public static function pagination($collection, $options)
  {
    if ($options['paginate']) {
      return $collection->render();
    }
    else
    {
      return '';
    }
  }

	public static function export($options)
	{
    if ($options['export'])
    {
      $links = '';

      foreach( $options['export'] as $kind )
      {
        $links .= '<li role="presentation">' .
          '<a role="menuitem" tabindex="-1" href="' . route($options['namespace'] . '.index.' . $kind, Input::all()) . '">' .
            trans('text.' . $kind) .
          '</a>' .
        '</li>';
      }

      return '<div class="dropdown bulk-export">' .
        '<button class="btn btn-default dropdown-toggle" type="button" id="menu-export" data-toggle="dropdown" aria-expanded="true">' .
          trans('text.export') .
          ' ' .
          '<span class="caret"></span>' .
        '</button>' .
        '<ul class="dropdown-menu" role="menu" aria-labelledby="menu-export">' .
          $links .
        '</ul>' .
      '</div>';
    }
    else
    {
      return '';
    }
	}

}

