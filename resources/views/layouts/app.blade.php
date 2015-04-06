<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>{{ trans('app.title') }}</title>

  	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  	<!--[if lt IE 9]>
  		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  					<span class="sr-only">{{ trans('toggle_navigation') }}</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>

  				<a class="navbar-brand" href="{{ url('/dashboard') }}">{{ trans('app.name') }}</a>
  			</div>

  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  				<ul class="nav navbar-nav">
  					<li><a href="{{ url('/dashboard') }}">{{ trans('app.dashboard') }}</a></li>
  				</ul>

  				<ul class="nav navbar-nav navbar-right">
  					<li class="dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="{{ url('/auth/logout') }}">{{ trans('app.logout') }}</a></li>
  						</ul>
  					</li>
  				</ul>
  			</div>
  		</div>
  	</nav>

  	@yield('content')

  	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
