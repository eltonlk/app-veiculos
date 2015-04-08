@extends('layouts.app')

@section('title', trans('vehicle_kinds.index.title'))

@section('content')
  <a class="btn btn-primary" href="{{ route('vehicle_kinds.create') }}">{{ trans('text.create') }}</a>

  <br><br>

  @if ( !$vehicle_kinds->count() )
    <p class="text-muted">{{ trans('vehicle_kinds.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.name') }}</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach( $vehicle_kinds as $vehicle_kind )
          @include('vehicle_kinds.vehicle_kind', [ 'vehicle_kind' => $vehicle_kind ])
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
