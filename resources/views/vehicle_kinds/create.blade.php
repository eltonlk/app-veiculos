@extends('layouts.app')

@section('title', trans('vehicle_kinds.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicle_kinds.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle_kind, ['route' => ['vehicle_kinds.store'], 'class' => 'form']) !!}
    @include('vehicle_kinds.form')
  {!! Form::close() !!}
@endsection
