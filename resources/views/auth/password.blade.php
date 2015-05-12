@extends('layouts.site')

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
  			<div class="panel panel-default">
  				<div class="panel-heading">
            <h3 class="panel-title">{{ trans('auth.password.title') }}</h3>
          </div>
  				<div class="panel-body">
  					@if (session('status'))
  						<div class="alert alert-success">
  							{{ session('status') }}
  						</div>
  					@endif

            @include('layouts.validation')

            {!! Form::open(array('url' => '/password/email', 'method' => 'post', 'class' => 'form')) !!}
              <div class="form-group">
                {!! Form::label('email', trans('validation.attributes.email')) !!}
                {!! Form::email('email', null, array('class'=>'form-control')) !!}
              </div>

              <div class="form-group">
                {!! Form::submit(trans('auth.password.submit'), array('class'=>'btn btn-primary')) !!}
              </div>
            {!! Form::close() !!}
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection
