{!! Form::search(route('destinations.index')) !!}
  {!! Form::hidden('search', true) !!}

  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('created_from', trans('validation.attributes.created_from')) !!}
        <div class="input-group date datepicker">
          {!! Form::text('created_from', null, array('class'=>'form-control')) !!}
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        {!! Form::label('created_to', trans('validation.attributes.created_to')) !!}
        <div class="input-group date datepicker">
          {!! Form::text('created_to', null, array('class'=>'form-control')) !!}
          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('vehicle_id', trans('validation.attributes.vehicle_id')) !!}
        {!! Form::select('vehicle_id', App\Vehicle::optionsForSelect(true), null, array('class'=>'form-control')) !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('state_id', trans('validation.attributes.state_id')) !!}
        {!! Form::select('state_id', App\State::optionsForSelect(false, true), null, array('class'=>'form-control')) !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        {!! Form::label('city_id', trans('validation.attributes.city_id')) !!}
        {!! Form::select('city_id', App\City::optionsForSelect(Form::getValueAttribute('state_id'), false, true), null, array('class'=>'form-control')) !!}
      </div>
    </div>
  </div>

  {!! Form::submitSearch(route('destinations.index')) !!}
{!! Form::close() !!}
