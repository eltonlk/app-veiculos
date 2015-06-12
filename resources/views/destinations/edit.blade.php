@extends('layouts.app')

@section('title', trans('destinations.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('destinations.index')) !!}
@endsection

@section('content')
  {!! Form::model($destination, ['route' => ['destinations.update', $destination->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('destinations.form')
  {!! Form::close() !!}
@endsection
