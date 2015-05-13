<div class="panel panel-default">
  <div id="account_edit" class="panel-heading" role="tab">
    <h3 class="panel-title">
      <a class="collapsed" href="#account_edit_content" data-toggle="collapse" data-parent="#settings" aria-expanded="false" aria-controls="account_edit_content">
        {{ trans('accounts.edit.title') }}
      </a>
    </h3>
  </div>
  <div id="account_edit_content" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="account_edit">
    <div class="panel-body">
      {!! Form::model(Auth::user()->account, ['route' => ['accounts.update', Auth::user()->account_id], 'method' => 'put', 'class' => 'form']) !!}
        @include('layouts.validation')

        <div class="form-group">
          {!! Form::label('name', trans('validation.attributes.name')) !!}
          {!! Form::text('name', null, array('class'=>'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('address', trans('validation.attributes.address')) !!}
          {!! Form::text('address', null, array('class'=>'form-control')) !!}
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

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('zip', trans('validation.attributes.zip')) !!}
              {!! Form::text('zip', null, array('class'=>'form-control')) !!}
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
              {!! Form::label('phone', trans('validation.attributes.phone')) !!}
              {!! Form::text('phone', null, array('class'=>'form-control')) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('email', trans('validation.attributes.email')) !!}
              {!! Form::email('email', null, array('class'=>'form-control')) !!}
            </div>
          </div>
        </div>

        <div class="form-group">
          {!! Form::submit(trans('text.update'), array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
