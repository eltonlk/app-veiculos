@extends('layouts.app')

@section('title', trans('vehicle_kinds.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicle_kinds.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle_kind, ['route' => ['vehicle_kinds.update', $vehicle_kind->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('vehicle_kinds.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
