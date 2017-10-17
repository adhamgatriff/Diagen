<!DOCTYPE html>
<html>
<head>
	<title>  @yield('title') -diagen</title>
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div id="app">
	 	@include('include.navbar')
		<div class="row">
		 	<div class="col m3 no-margen side-show">
		 		@include('include.sidebar')
		 	</div>
		 	<div class="col m9 s12 no-margen">
				<div class="titulito" style="padding-top: 17px;">
					<span class="flow-text" style="margin: 5%;margin-top: 75px;">@yield('title')</span>
				</div>
		 		<div class="container">
		 				@yield('main')
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
	
		 		</div>
		 	</div>
		</div>

	@include('include.footer')

	</div>
	<script src='{{mix("js/app.js")}}'></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" src="{{ asset('js/mio.js') }}"></script>
</body>
</html>
