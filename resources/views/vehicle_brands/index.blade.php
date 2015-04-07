@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('vehicle_brands.index.title') }}</h3>
          </div>
          <div class="panel-body">
            <a class="btn btn-primary" href="{{ route('vehicle_brands.create') }}">{{ trans('text.create') }}</a>

            <br><br>

            @if ( !$vehicle_brands->count() )
              <p class="text-muted">{{ trans('vehicle_brands.messages.empty') }}</p>
            @else
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ trans('validation.attributes.name') }}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $vehicle_brands as $vehicle_brand )
                    <tr>
                      <td>{{ $vehicle_brand->name }}</td>
                      <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['vehicle_brands.destroy', $vehicle_brand->id]]) !!}
                          <a class="btn btn-default btn-xs" href="{{ route('vehicle_brands.edit', [ 'id' => $vehicle_brand->id ]) }}">
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
