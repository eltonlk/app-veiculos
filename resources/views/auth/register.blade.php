@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-md-offset-4">
  			<div class="panel panel-default">
  				<div class="panel-heading">
            <h3 class="panel-title">{{ trans('auth.register.title') }}</h3>
          </div>
  				<div class="panel-body">
            {!! Form::open(array('url' => '/auth/register', 'method' => 'post', 'class' => 'form')) !!}
              {!! Form::errorNotification() !!}

              {!! Form::inputString('name') !!}

              {!! Form::inputEmail('email') !!}

              <div class="row">
                <div class="col-md-6">
                  {!! Form::inputPassword('password') !!}
                </div>
                <div class="col-md-6">
                  {!! Form::inputPassword('password_confirmation') !!}
                </div>
              </div>

              {!! Form::inputString('address') !!}

              <div class="row">
                <div class="col-md-6">
                  {!! Form::inputCollection('state_id', App\State::optionsForSelect(true)) !!}
                </div>
                <div class="col-md-6">
                  {!! Form::inputCollection('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id'))) !!}
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  {!! Form::inputString('zip') !!}
                </div>
                <div class="col-md-6">
                  {!! Form::inputString('district') !!}
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  {!! Form::inputString('phone') !!}
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
