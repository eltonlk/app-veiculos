@include('layouts.validation')

<div class="form-group">
  {!! Form::label('name', trans('validation.attributes.name')) !!}
  {!! Form::text('name', null, array('class'=>'form-control')) !!}
</div>

<div class="form-group">
  {!! Form::submit($submit_text, array('class'=>'btn btn-primary')) !!}
</div>
