@extends('layouts.app')

@section('title', trans('vehicle_brands.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicle_brands.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle_brand, ['route' => ['vehicle_brands.store'], 'class' => 'form']) !!}
    @include('vehicle_brands.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
