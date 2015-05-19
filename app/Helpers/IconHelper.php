<?php

class IconHelper {

  public static function forAction($action, $text = null)
  {
    $action = self::getAction($action);

    return "<span class=\"glyphicon glyphicon-$action\" aria-hidden=\"true\"></span> $text";
  }

  private static function getAction($action)
  {
    $aliases = self::aliases();

    if (array_key_exists($action, $aliases)) {
      return $aliases[$action];
    } else {
      return $action;
    }
  }

  private static function aliases()
  {
    return [
      'back'    => 'arrow-left',
      'create'  => 'plus',
      'destroy' => 'trash',
      'edit'    => 'pencil',
    ];
  }

}
