@extends('layouts.app')

@section('title', trans('settings.index.title'))

@section('content')
  <div id="settings" class="panel-group panel-group-collapse" role="tablist" aria-multiselectable="true">
    @include('accounts.edit')

    @include('accounts.delete')
  </div>
@endsection
