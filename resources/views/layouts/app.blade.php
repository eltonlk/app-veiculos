<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title>{{ trans('app.title') }}</title>

    <meta name="csrf-param" content="_token">
  	<meta name="csrf-token" content="{{ csrf_token() }}">

  	<link href="{{ elixir('output/app.css') }}" rel="stylesheet">

  	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-inverse">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  					<span class="sr-only">{{ trans('text.toggle_navigation') }}</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>

  				<a class="navbar-brand" href="{{ url('/dashboard') }}">{{ trans('app.name') }}</a>
  			</div>

  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  				<ul class="nav navbar-nav">
  					<li><a href="{{ url('/dashboard') }}">{{ trans('app.dashboard') }}</a></li>
  					<li><a href="{{ url('/destinations') }}">{{ trans('app.destinations') }}</a></li>
  					<li><a href="{{ url('/maintenances') }}">{{ trans('app.maintenances') }}</a></li>
  					<li><a href="{{ url('/supplies') }}">{{ trans('app.supplies') }}</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ trans('app.reports') }}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/teste') }}">{{ trans('app.teste') }}</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ trans('app.entries') }}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/vehicles') }}">{{ trans('app.vehicles') }}</a></li>
                <li><a href="{{ url('/vehicle_kinds') }}">{{ trans('app.vehicle_kinds') }}</a></li>
                <li><a href="{{ url('/vehicle_brands') }}">{{ trans('app.vehicle_brands') }}</a></li>
              </ul>
            </li>
  				</ul>

  				<ul class="nav navbar-nav navbar-right">
  					<li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="{{ url('/users') }}">{{ trans('app.users') }}</a></li>
  							<li><a href="{{ url('/settings') }}">{{ trans('app.settings') }}</a></li>
                <li class="divider"></li>
  							<li><a href="{{ url('/auth/logout') }}">{{ trans('app.logout') }}</a></li>
  						</ul>
  					</li>
  				</ul>
  			</div>
  		</div>
  	</nav>

    <div class="page-header">
      <div class="container">
        <h1>
           @yield('title')
        </h1>
        <nav>
          @yield('nav')
        </nav>
      </div>
    </div>

    <div class="container">
      @include('flash::message')

      @yield('content')
    </div>

  	<script src="{{ elixir('output/app.js') }}"></script>
  </body>
</html>
