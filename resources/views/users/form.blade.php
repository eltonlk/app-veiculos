{!! Form::errorNotification() !!}

{!! Form::inputString('name') !!}

{!! Form::inputEmail('email') !!}

@unless (Form::getValueAttribute('id'))
  <div class="row">
    <div class="col-md-6">
      {!! Form::inputPassword('password') !!}
    </div>
    <div class="col-md-6">
      {!! Form::inputPassword('password_confirmation') !!}
    </div>
  </div>
@endif

{!! Form::inputString('address') !!}

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('state_id', App\State::optionsForSelect()) !!}
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

{!! Form::submitModel(route('users.index')) !!}
