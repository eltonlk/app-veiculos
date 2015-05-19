@extends('layouts.app')

@section('title', trans('supplies.create.title'))

@section('nav')
  {!! LinkHelper::toBack(route('supplies.index')) !!}
@endsection

@section('content')
  {!! Form::model($supply, ['route' => ['supplies.store'], 'class' => 'form']) !!}
    @include('supplies.form', [ 'submit_text' => trans('text.create') ])
  {!! Form::close() !!}
@endsection
