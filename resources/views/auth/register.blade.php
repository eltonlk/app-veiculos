@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4">
  			<div class="panel panel-default">
  				<div class="panel-heading">{{ trans('auth.register.title') }}</div>
  				<div class="panel-body">
            @include('layouts.validation')

            {!! Form::open(array('url' => '/auth/register', 'method' => 'post', 'class' => 'form')) !!}
              <div class="form-group">
                {!! Form::label('name', trans('validation.attributes.name')) !!}
                {!! Form::text('name', null, array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('email', trans('validation.attributes.email')) !!}
                {!! Form::email('email', null, array('class'=>'form-control')) !!}
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('password', trans('validation.attributes.password')) !!}
                    {!! Form::password('password', array('class'=>'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation')) !!}
                    {!! Form::password('password_confirmation', array('class'=>'form-control')) !!}
                  </div>
                </div>
              </div>

              <div class="form-group">
                {!! Form::submit(trans('auth.register.submit'), array('class'=>'btn btn-primary')) !!}
              </div>
            {!! Form::close() !!}
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
