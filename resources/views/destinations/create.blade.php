@extends('layouts.app')

@section('title', trans('destinations.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('destinations.index')) !!}
@endsection

@section('content')
  {!! Form::model($destination, ['route' => ['destinations.store'], 'class' => 'form']) !!}
    @include('destinations.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
