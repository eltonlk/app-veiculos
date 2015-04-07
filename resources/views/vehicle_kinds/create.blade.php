@extends('layouts.app')

@section('content')
  <div class="container">
    @include('layouts.message')

    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('vehicle_kinds.create.title') }}</h3>
          </div>
          <div class="panel-body">
            <a class="btn btn-default" href="{{ route('vehicle_kinds.index') }}">{{ trans('text.back') }}</a>

            <br><br>

            @include('layouts.validation')

            {!! Form::model($vehicle_kind, ['route' => ['vehicle_kinds.store'], 'class' => 'form']) !!}
              <div class="form-group">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::submit(trans('text.create'), array('class'=>'btn btn-primary')) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
