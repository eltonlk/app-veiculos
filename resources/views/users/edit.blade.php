@extends('layouts.app')

@section('title', trans('users.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('users.index')) !!}
@endsection

@section('content')
  {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('users.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
