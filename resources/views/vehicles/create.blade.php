@extends('layouts.app')

@section('title', trans('vehicles.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicles.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle, ['route' => ['vehicles.store'], 'class' => 'form']) !!}
    @include('vehicles.form')
  {!! Form::close() !!}
@endsection
