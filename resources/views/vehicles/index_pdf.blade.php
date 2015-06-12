@extends('layouts.pdf')

@section('title', trans('vehicles.index.title'))

@section('content')
  @unless ($vehicles->count())
    <p class="text-muted">{{ trans('vehicles.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.kind') }}</th>
          <th>{{ trans('validation.attributes.brand') }}</th>
          <th>{{ trans('validation.attributes.name') }}</th>
          <th>{{ trans('validation.attributes.model') }}</th>
          <th>{{ trans('validation.attributes.color') }}</th>
          <th>{{ trans('validation.attributes.year') }}</th>

          @if (Input::get('date') == 'sold')
            <th>{{ trans('validation.attributes.sold') }}</th>
          @else
            <th>{{ trans('validation.attributes.purchased_in') }}</th>
          @endif

          <th>{{ trans('validation.attributes.amount') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $vehicles as $vehicle )
          <tr>
            <td>{{ $vehicle->kind->name }}</td>
            <td>{{ $vehicle->brand->name }}</td>
            <td>{{ $vehicle->name }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->color }}</td>
            <td>{{ $vehicle->year }}</td>

            @if (Input::get('date') == 'sold')
              <td>{{ I18nHelper::l($vehicle->sold) }}</td>
            @else
              <td>{{ I18nHelper::l($vehicle->purchased_in) }}</td>
            @endif

            <td style="text-align:right;">{{ I18nHelper::n2c($vehicle->amount) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
