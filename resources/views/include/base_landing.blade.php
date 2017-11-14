<!DOCTYPE html>
<html>
<head>
	<title>  @yield('title') -diagen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	@include('include.navbar')
		<main id="app">
			@yield('main')
		</main>
	@include('include.footer')
	</div>
	<script src='{{mix("js/app.js")}}'></script>
	<script type="text/javascript" src="{{ asset('js/mio.js') }}"></script>
</body>
</html>
