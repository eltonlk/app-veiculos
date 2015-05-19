@include('layouts.validation')

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {!! Form::label('vehicle_id', trans('validation.attributes.vehicle_id')) !!}
      {!! Form::select('vehicle_id', App\Vehicle::optionsForSelect(), null, array('class'=>'form-control')) !!}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {!! Form::label('amount', trans('validation.attributes.amount')) !!}
      {!! Form::text('amount', I18nHelper::n2c($maintenance->amount), array('class'=>'form-control currency')) !!}
    </div>
  </div>
</div>

<div class="form-group">
  {!! Form::label('description', trans('validation.attributes.description')) !!}
  {!! Form::textarea('description', null, array('class'=>'form-control')) !!}
</div>

{!! Form::submitModel(route('maintenances.index'), $submit_text) !!}
