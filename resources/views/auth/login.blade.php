@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
  			<div class="panel panel-default">
  				<div class="panel-heading">{{ trans('auth.login.title') }}</div>
  				<div class="panel-body">
            @include('layouts.validation')

            {!! Form::open(array('url' => '/auth/login', 'method' => 'post', 'class' => 'form')) !!}
              <div class="form-group">
                {!! Form::label('email', trans('validation.attributes.email')) !!}
                {!! Form::email('email', null, array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::label('password', trans('validation.attributes.password')) !!}
                {!! Form::password('password', array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::checkbox('remember', 1, false) !!}
                {!! Form::label('remember', trans('validation.attributes.remember')) !!}
              </div>

              <div class="form-group">
                {!! Form::submit(trans('text.log_in'), array('class'=>'btn btn-primary')) !!}

								<a class="btn btn-link" href="{{ url('/password/email') }}">{{ trans('passwords.forgot_your_password') }}</a>
              </div>
            {!! Form::close() !!}
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
