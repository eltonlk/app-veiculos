@extends('layouts.app')

@section('title', trans('vehicles.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicles.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle, ['route' => ['vehicles.update', $vehicle->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('vehicles.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
