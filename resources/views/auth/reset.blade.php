@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
  			<div class="panel panel-default">
  				<div class="panel-heading">
            <h3 class="panel-title">{{ trans('auth.reset.title') }}</h3>
          </div>
  				<div class="panel-body">
            @include('errors.validation')

            {!! Form::open(array('url' => '/password/reset', 'method' => 'post', 'class' => 'form')) !!}
              {!! Form::hidden('token') !!}

              {!! Form::inputEmail('email') !!}

              {!! Form::inputPassword('password') !!}

              {!! Form::inputPassword('password_confirmation') !!}

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
