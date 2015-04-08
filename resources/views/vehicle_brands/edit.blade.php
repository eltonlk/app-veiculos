@extends('layouts.app')

@section('title', trans('vehicle_brands.edit.title'))

@section('content')
  <a class="btn btn-default" href="{{ route('vehicle_brands.index') }}">{{ trans('text.back') }}</a>

  <br><br>

  {!! Form::model($vehicle_brand, ['route' => ['vehicle_brands.update', $vehicle_brand->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('vehicle_brands.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
