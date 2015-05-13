@extends('layouts.app')

@section('title', trans('vehicles.edit.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('vehicles.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($vehicle, ['route' => ['vehicles.update', $vehicle->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('vehicles.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
