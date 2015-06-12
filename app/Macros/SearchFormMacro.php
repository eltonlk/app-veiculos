<?php

Form::macro('search', function($url) {
  $options = ['url' => $url, 'class' => 'form-search', 'method' => 'get'];

  if (!Input::get('search')) {
    $options['hidden'] = true;
  }

  return $this->open($options);
});

Form::macro('submitSearch', function($url) {
  return '<div class="form-group">' .
    Form::hidden('search', true) .
    Form::submit(trans('text.search'), array('class'=>'btn btn-default')) .
    ' ' .
    trans('text.or') .
    ' ' .
    link_to($url, trans('text.cancel'), ['class' => 'link-to-cancel']) .
  '</div>';
});

