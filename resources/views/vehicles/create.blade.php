@extends('layouts.app')

@section('title', trans('vehicles.create.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('vehicles.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($vehicle, ['route' => ['vehicles.store'], 'class' => 'form']) !!}
    @include('vehicles.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
