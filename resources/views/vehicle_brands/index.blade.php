@extends('layouts.app')

@section('title', trans('vehicle_brands.index.title'))

@section('content')
  <a class="btn btn-primary" href="{{ route('vehicle_brands.create') }}">{{ trans('text.create') }}</a>

  <br><br>

  @unless ($vehicle_brands->count())
    <p class="text-muted">{{ trans('vehicle_brands.messages.empty') }}</p>
  @else
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.name') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $vehicle_brands as $vehicle_brand )
            @include('vehicle_brands.vehicle_brand', [ 'vehicle_brand' => $vehicle_brand ])
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
@endsection
