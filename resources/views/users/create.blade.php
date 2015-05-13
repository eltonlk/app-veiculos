@extends('layouts.app')

@section('title', trans('users.create.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('users.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($user, ['route' => ['users.store'], 'class' => 'form']) !!}
    @include('users.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
