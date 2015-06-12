{!! Form::search(route('destinations.index')) !!}
  <div class="row">
    <div class="col-md-3">
      {!! Form::inputDatepicker('created_from') !!}
    </div>
    <div class="col-md-3">
      {!! Form::inputDatepicker('created_to') !!}
    </div>
    <div class="col-md-4">
      {!! Form::inputCollection('vehicle_id', App\Vehicle::optionsForSelect(true)) !!}
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      {!! Form::inputCollection('state_id', App\State::optionsForSelect(false, true)) !!}
    </div>
    <div class="col-md-4">
      {!! Form::inputCollection('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id'), false, true)) !!}
    </div>
  </div>

  {!! Form::submitSearch(route('destinations.index')) !!}
{!! Form::close() !!}
