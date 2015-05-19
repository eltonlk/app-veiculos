@extends('layouts.app')

@section('title', trans('destinations.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('destinations.index')) !!}
@endsection

@section('content')
  {!! Form::model($destination, ['route' => ['destinations.update', $destination->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('destinations.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
