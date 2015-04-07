@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('vehicle_kinds.index.title') }}</h3>
          </div>
          <div class="panel-body">
            <a class="btn btn-primary" href="{{ route('vehicle_kinds.create') }}">{{ trans('text.create') }}</a>

            <br><br>

            @if ( !$vehicle_kinds->count() )
              <p class="text-muted">{{ trans('vehicle_kinds.messages.empty') }}</p>
            @else
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ trans('validation.attributes.name') }}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $vehicle_kinds as $vehicle_kind )
                    <tr>
                      <td>{{ $vehicle_kind->name }}</td>
                      <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['vehicle_kinds.destroy', $vehicle_kind->id]]) !!}
                          <a class="btn btn-default btn-xs" href="{{ route('vehicle_kinds.edit', [ 'id' => $vehicle_kind->id ]) }}">
                            {{ trans('text.edit') }}
                          </a>

                          {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) !!}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
