@extends('layouts.app')

@section('title', trans('vehicles.index.title'))

@section('content')
  <a class="btn btn-primary" href="{{ route('vehicles.create') }}">{{ trans('text.create') }}</a>

  <br><br>

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
            <th>{{ trans('validation.attributes.purchased_in') }}</th>
            <th>{{ trans('validation.attributes.amount') }}</th>
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
