@extends('layouts.pdf')

@section('title', trans('maintenances.index.title'))

@section('content')
  @unless ($maintenances->count())
    <p class="text-muted">{{ trans('maintenances.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.realized_at') }}</th>
          <th>{{ trans('validation.attributes.vehicle') }}</th>
          <th>{{ trans('validation.attributes.amount') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $maintenances as $maintenance )
          <tr>
            <td>{{ I18nHelper::l($maintenance->realized_at) }}</td>
            <td>{{ $maintenance->vehicle->name }}</td>
            <td style="text-align:right;">{{ I18nHelper::n2c($maintenance->amount) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
