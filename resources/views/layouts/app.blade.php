<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="{{ asset('img/ico32x32.ico') }}" type="image/ico" sizes="32x32">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/material-design-icons/iconfont/material-icons.css')}}">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('titulo')</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	@yield('mascss')
</head>
<body id="bodyas" style="background-color: #19171c;">
	<div id="app">
	  <navbar-dg logeado="{{ Auth::check() ? '1':'0' }}"></navbar-dg>
		@yield('content')
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
	  $(document).ready(function() {
		  new particle.default(document.getElementById('bodyas'), {
			dotColor: '#E91E63',
			lineColor: '#4b367c',
			density: 9000,
			parallax: true
		}); 
	  });

	</script>
</body>
</html>
