<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>  @yield('title') - Diagen</title>
	<link rel="icon" href="{{ asset('img/ico32x32.ico') }}" type="image/ico" sizes="32x32">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/material-design-icons/iconfont/material-icons.css')}}">
</head>
<body>
		<main id="app">
			<router-view :logeado="{{ Auth::check() ? '1':'0' }}"></router-view>
		</main>
	</div>

	<script src='{{mix("js/app.js")}}'></script>
		<script type="text/javascript" src="{{ asset('js/mio.js') }}"></script>
		<script>

			const part = new particle.default(document.getElementById('app'), {
					dotColor: '#E91E63',
						lineColor: '#4b367c',
						density: 9000,
						parallax: true
					});

	</script>
	@yield('script')
</body>
</html>
