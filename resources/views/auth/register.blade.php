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
                {!! Form::label('address', trans('validation.attributes.address')) !!}
                {!! Form::text('address', null, array('class'=>'form-control')) !!}
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('state_id', trans('validation.attributes.state_id')) !!}
                    {!! Form::select('state_id', App\State::optionsForSelect(), null, array('class'=>'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('city_id', trans('validation.attributes.city_id')) !!}
                    {!! Form::select('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id')), null, array('class'=>'form-control')) !!}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('zip', trans('validation.attributes.zip')) !!}
                    {!! Form::text('zip', null, array('class'=>'form-control')) !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('district', trans('validation.attributes.district')) !!}
                    {!! Form::text('district', null, array('class'=>'form-control')) !!}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    {!! Form::label('phone', trans('validation.attributes.phone')) !!}
                    {!! Form::text('phone', null, array('class'=>'form-control')) !!}
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
