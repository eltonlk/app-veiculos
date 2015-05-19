@extends('layouts.app')

@section('title', trans('supplies.index.title'))

@section('nav')
  {!! LinkHelper::toSearch() !!}
  {!! LinkHelper::toCreate(route('supplies.create')) !!}
@endsection

@section('content')
  @include('supplies.search')

  @unless ($supplies->count())
    <p class="text-muted">{{ trans('supplies.messages.empty') }}</p>
  @else
    {!! $supplies->render() !!}

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.created_at') }}</th>
            <th>{{ trans('validation.attributes.vehicle') }}</th>
            <th>{{ trans('validation.attributes.liters') }}</th>
            <th>{{ trans('validation.attributes.mileage') }}</th>
            <th class="center">{{ trans('validation.attributes.amount') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $supplies as $supply )
            @include('supplies.supply', [ 'supply' => $supply ])
          @endforeach
        </tbody>
      </table>
    </div>

    {!! $supplies->render() !!}
  @endif
@endsection
