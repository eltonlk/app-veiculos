@extends('layouts.app')

@section('title', trans('maintenances.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('maintenances.index')) !!}
@endsection

@section('content')
  {!! Form::model($maintenance, ['route' => ['maintenances.store'], 'class' => 'form']) !!}
    @include('maintenances.form')
  {!! Form::close() !!}
@endsection
