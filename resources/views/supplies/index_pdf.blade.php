@extends('layouts.pdf')

@section('title', trans('supplies.index.title'))

@section('content')
  @unless ($supplies->count())
    <p class="text-muted">{{ trans('supplies.messages.empty') }}</p>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ trans('validation.attributes.created_at') }}</th>
          <th>{{ trans('validation.attributes.vehicle') }}</th>
          <th>{{ trans('validation.attributes.liters') }}</th>
          <th>{{ trans('validation.attributes.mileage') }}</th>
          <th>{{ trans('validation.attributes.amount') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $supplies as $supply )
          <tr>
            <td>{{ I18nHelper::l($supply->created_at) }}</td>
            <td>{{ $supply->vehicle->name }}</td>
            <td>{{ $supply->liters }}</td>
            <td>{{ $supply->mileage }}</td>
            <td style="text-align:right;">{{ I18nHelper::n2c($supply->amount) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
