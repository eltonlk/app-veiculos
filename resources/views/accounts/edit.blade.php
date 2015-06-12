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
        {!! Form::errorNotification() !!}

        {!! Form::inputString('name') !!}

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
          <div class="col-md-6">
            {!! Form::inputEmail('email') !!}
          </div>
        </div>

        <div class="form-group">
          {!! Form::submit(trans('text.update'), array('class'=>'btn btn-primary')) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
