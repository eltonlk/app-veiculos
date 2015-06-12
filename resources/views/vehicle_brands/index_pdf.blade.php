@extends('layouts.pdf')

@section('title', trans('vehicle_brands.index.title'))

@section('content')
  @unless ($vehicle_brands->count())
    <p class="text-muted">{{ trans('vehicle_brands.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.name') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $vehicle_brands as $vehicle_brand )
          <tr>
            <td>{{ $vehicle_brand->name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
