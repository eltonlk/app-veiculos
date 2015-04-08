@extends('layouts.app')

@section('title', trans('vehicle_kinds.create.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('vehicle_kinds.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($vehicle_kind, ['route' => ['vehicle_kinds.store'], 'class' => 'form']) !!}
    @include('vehicle_kinds.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
