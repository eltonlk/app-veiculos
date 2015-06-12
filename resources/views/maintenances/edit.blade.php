@extends('layouts.app')

@section('title', trans('maintenances.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('maintenances.index')) !!}
@endsection

@section('content')
  {!! Form::model($maintenance, ['route' => ['maintenances.update', $maintenance->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('maintenances.form')
  {!! Form::close() !!}
@endsection
