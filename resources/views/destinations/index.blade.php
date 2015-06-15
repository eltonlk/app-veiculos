@extends('layouts.app')

@section('title', trans('destinations.index.title'))

@section('nav')
  {!! LinkHelper::toSearch() !!}
  {!! LinkHelper::toCreate(route('destinations.create')) !!}
@endsection

@section('content')
  @include('destinations.search')

  @unless ($destinations->count())
    <p class="text-muted">{{ trans('destinations.messages.empty') }}</p>
  @else
    {!! BulkHelper::render($destinations, [ 'namespace' => 'destinations' ]) !!}

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.output_in') }}</th>
            <th>{{ trans('validation.attributes.returned_in') }}</th>
            <th>{{ trans('validation.attributes.vehicle') }}</th>
            <th>{{ trans('validation.attributes.address') }}</th>
            <th>{{ trans('validation.attributes.district') }}</th>
            <th>{{ trans('validation.attributes.city') }}</th>
            <th>{{ trans('validation.attributes.state') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $destinations as $destination )
            @include('destinations.destination', [ 'destination' => $destination ])
          @endforeach
        </tbody>
      </table>
    </div>

    {!! BulkHelper::render($destinations, [ 'namespace' => 'destinations' ]) !!}
  @endif
@endsection
