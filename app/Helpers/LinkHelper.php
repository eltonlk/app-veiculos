<?php

class LinkHelper {

  public static function toBack($url)
  {
    $title = IconHelper::forAction('back', trans('text.back'));

    return "<a href=\"$url\" class=\"btn btn-default\">$title</a>";
  }

  public static function toCreate($url)
  {
    $title = IconHelper::forAction('create', trans('text.create'));

    return "<a href=\"$url\" class=\"btn btn-primary\">$title</a>";
  }

  public static function toSearch()
  {
    $title = IconHelper::forAction('search', trans('text.search'));

    return "<a href=\"#\" class=\"btn btn-default link-to-search\">$title</a>";
  }
}
