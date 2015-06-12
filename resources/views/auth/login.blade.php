@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
  			<div class="panel panel-default">
  				<div class="panel-heading">
            <h3 class="panel-title">{{ trans('auth.login.title') }}</h3>
          </div>
  				<div class="panel-body">
            {!! Form::open(array('url' => '/auth/login', 'method' => 'post', 'class' => 'form')) !!}
              {!! Form::errorNotification() !!}

              {!! Form::inputEmail('email') !!}

              {!! Form::inputPassword('password') !!}

              {!! Form::inputBoolean('remember') !!}

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
