@extends('layouts.app')

@section('title', trans('vehicles.index.title'))

@section('nav')
  {!! LinkHelper::toSearch() !!}
  {!! LinkHelper::toCreate(route('vehicles.create')) !!}
@endsection

@section('content')
  @include('vehicles.search')

  @unless ($vehicles->count())
    <p class="text-muted">{{ trans('vehicles.messages.empty') }}</p>
  @else
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.kind') }}</th>
            <th>{{ trans('validation.attributes.brand') }}</th>
            <th>{{ trans('validation.attributes.name') }}</th>
            <th>{{ trans('validation.attributes.model') }}</th>
            <th>{{ trans('validation.attributes.color') }}</th>
            <th>{{ trans('validation.attributes.year') }}</th>

            @if (old('date') == 'sold')
              <th>{{ trans('validation.attributes.sold') }}</th>
            @else
              <th>{{ trans('validation.attributes.purchased_in') }}</th>
            @endif

            <th class="center">{{ trans('validation.attributes.amount') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $vehicles as $vehicle )
            @include('vehicles.vehicle', [ 'vehicle' => $vehicle ])
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
@endsection
