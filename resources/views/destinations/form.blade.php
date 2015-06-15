{!! Form::errorNotification() !!}

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('vehicle_id', App\Vehicle::optionsForSelect()) !!}
  </div>
  <div class="col-md-3">
    {!! Form::inputDateTimepicker('output_in') !!}
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    {!! Form::inputString('address') !!}
  </div>
  <div class="col-md-6">
    {!! Form::inputString('district') !!}
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    {!! Form::inputCollection('state_id', App\State::optionsForSelect()) !!}
  </div>
  <div class="col-md-6">
    {!! Form::inputCollection('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id'))) !!}
  </div>
</div>

{!! Form::submitModel(route('destinations.index')) !!}
