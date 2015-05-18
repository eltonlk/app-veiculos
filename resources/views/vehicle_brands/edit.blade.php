@extends('layouts.app')

@section('title', trans('vehicle_brands.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('vehicle_brands.index')) !!}
@endsection

@section('content')
  {!! Form::model($vehicle_brand, ['route' => ['vehicle_brands.update', $vehicle_brand->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('vehicle_brands.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
