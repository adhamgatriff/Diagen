<!DOCTYPE html>
<html>
<head>
	<title>  @yield('title') -diagen</title>
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/mio.css') }}">
</head>
<body>
	<div id="app">
	 	@include('include.navbar')

		<div class="row no-margen-right">
		 	<div class="col-md-3">
		 		@include('include.sidebar')
		 	</div>
		 	<div class="col-md-9">
		 		<main>
		 			@yield('main')

		 		</main>
		 	</div>
		</div>

		{{-- @include('include.footer') --}}
	</div>
		<script src='{{mix("js/app.js")}}'></script>

</body>
</html>
