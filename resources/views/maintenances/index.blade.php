@extends('layouts.app')

@section('title', trans('maintenances.index.title'))

@section('nav')
  {!! LinkHelper::toSearch() !!}
  {!! LinkHelper::toCreate(route('maintenances.create')) !!}
@endsection

@section('content')
  @include('maintenances.search')

  @unless ($maintenances->count())
    <p class="text-muted">{{ trans('maintenances.messages.empty') }}</p>
  @else
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.created_at') }}</th>
            <th>{{ trans('validation.attributes.vehicle') }}</th>
            <th class="center">{{ trans('validation.attributes.amount') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $maintenances as $maintenance )
            @include('maintenances.maintenance', [ 'maintenance' => $maintenance ])
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
@endsection
