@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
  			<div class="panel panel-default">
  				<div class="panel-heading">{{ trans('auth.reset.title') }}</div>
  				<div class="panel-body">
            @include('layouts.validation')

            {!! Form::open(array('url' => '/password/reset', 'method' => 'post', 'class' => 'form')) !!}
              {!! Form::hidden('token') !!}

              <div class="form-group">
                {!! Form::label('email', trans('validation.attributes.email')) !!}
                {!! Form::email('email', null, array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('password', trans('validation.attributes.password')) !!}
                {!! Form::password('password', array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation')) !!}
                {!! Form::password('password_confirmation', array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::submit(trans('auth.reset.submit'), array('class'=>'btn btn-primary')) !!}
              </div>
            {!! Form::close() !!}
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
