@include('layouts.validation')

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('vehicle_id', trans('validation.attributes.vehicle_id')) !!}
      {!! Form::select('vehicle_id', App\Vehicle::optionsForSelect(), null, array('class'=>'form-control')) !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('address', trans('validation.attributes.address')) !!}
      {!! Form::text('address', null, array('class'=>'form-control')) !!}
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

{!! Form::submitModel(route('destinations.index'), $submit_text) !!}
