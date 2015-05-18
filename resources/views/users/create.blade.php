@extends('layouts.app')

@section('title', trans('users.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('users.index')) !!}
@endsection

@section('content')
  {!! Form::model($user, ['route' => ['users.store'], 'class' => 'form']) !!}
    @include('users.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
