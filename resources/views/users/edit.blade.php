@extends('layouts.app')

@section('title', trans('users.edit.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('users.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('users.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
