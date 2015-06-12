@extends('layouts.pdf')

@section('title', trans('destinations.index.title'))

@section('content')
  @unless ($destinations->count())
    <p class="text-muted">{{ trans('destinations.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.created_at') }}</th>
          <th>{{ trans('validation.attributes.vehicle') }}</th>
          <th>{{ trans('validation.attributes.address') }}</th>
          <th>{{ trans('validation.attributes.district') }}</th>
          <th>{{ trans('validation.attributes.city') }}</th>
          <th>{{ trans('validation.attributes.state') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $destinations as $destination )
          <tr>
            <td>{{ I18nHelper::l($destination->created_at) }}</td>
            <td>{{ $destination->vehicle->name }}</td>
            <td>{{ $destination->address }}</td>
            <td>{{ $destination->district }}</td>
            <td>{{ $destination->city->name }}</td>
            <td>{{ $destination->state->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
