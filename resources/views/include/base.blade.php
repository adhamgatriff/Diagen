<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>  @yield('title') - diagen</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>
<body>

	@include('include.navbar')
	{{-- @include('include.sidebar') --}}
		<main id="app">
			@yield('main')
		</main>
	@include('include.footer')
	</div>
	<script src='{{mix("js/app.js")}}'></script>
	<script type="text/javascript" src="{{ asset('js/mio.js') }}"></script>
	@yield('script')
</body>
</html>
