@extends('layouts.app')

@section('title', trans('vehicle_brands.index.title'))

@section('nav')
  {!! LinkHelper::toCreate(route('vehicle_brands.create')) !!}
@endsection

@section('content')
  @unless ($vehicle_brands->count())
    <p class="text-muted">{{ trans('vehicle_brands.messages.empty') }}</p>
  @else
    {!! $vehicle_brands->render() !!}

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

    {!! $vehicle_brands->render() !!}
  @endif
@endsection
