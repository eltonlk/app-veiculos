@include('layouts.validation')

<div class="form-group">
  {!! Form::label('name', trans('validation.attributes.name')) !!}
  {!! Form::text('name', null, array('class'=>'form-control')) !!}
</div>

{!! Form::submitModel(route('vehicle_kinds.index'), $submit_text) !!}
