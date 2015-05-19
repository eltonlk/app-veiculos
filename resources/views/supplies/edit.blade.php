@extends('layouts.app')

@section('title', trans('supplies.edit.title'))

@section('nav')
  {!! LinkHelper::toBack(route('supplies.index')) !!}
@endsection

@section('content')
  {!! Form::model($supply, ['route' => ['supplies.update', $supply->id], 'method' => 'put', 'class' => 'form']) !!}
    @include('supplies.form', [ 'submit_text' => trans('text.update') ])
  {!! Form::close() !!}
@endsection
