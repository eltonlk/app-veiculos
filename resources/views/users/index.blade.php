@extends('layouts.app')

@section('title', trans('users.index.title'))

@section('nav')
  {!! LinkHelper::toCreate(route('users.create')) !!}
@endsection

@section('content')
  @unless ($users->count())
    <p class="text-muted">{{ trans('users.messages.empty') }}</p>
  @else
    {!! $users->render() !!}

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>{{ trans('validation.attributes.name') }}</th>
            <th>{{ trans('validation.attributes.email') }}</th>
            <th>{{ trans('validation.attributes.phone') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach( $users as $user )
            @include('users.user', [ 'user' => $user ])
          @endforeach
        </tbody>
      </table>
    </div>

    {!! $users->render() !!}
  @endif
@endsection
