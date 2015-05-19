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
  <div class="col-md-3">
    <div class="form-group">
      {!! Form::label('liters', trans('validation.attributes.liters')) !!}
      {!! Form::text('liters', null, array('class'=>'form-control')) !!}
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      {!! Form::label('mileage', trans('validation.attributes.mileage')) !!}
      {!! Form::text('mileage', null, array('class'=>'form-control')) !!}
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      {!! Form::label('amount', trans('validation.attributes.amount')) !!}
      {!! Form::text('amount', I18nHelper::n2c($supply->amount), array('class'=>'form-control currency')) !!}
    </div>
  </div>
</div>

{!! Form::submitModel(route('supplies.index'), $submit_text) !!}
