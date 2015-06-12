@extends('layouts.pdf')

@section('title', trans('vehicle_kinds.index.title'))

@section('content')
  @unless ($vehicle_kinds->count())
    <p class="text-muted">{{ trans('vehicle_kinds.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.name') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $vehicle_kinds as $vehicle_kind )
          <tr>
            <td>{{ $vehicle_kind->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
