@extends('layouts.app')

@section('title', trans('supplies.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('supplies.index')) !!}
@endsection

@section('content')
  {!! Form::model($supply, ['route' => ['supplies.store'], 'class' => 'form']) !!}
    @include('supplies.form')
  {!! Form::close() !!}
@endsection
