<!DOCTYPE html>
<html>
<head>
	<title>  @yield('title') -diagen</title>
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
</head>
<body>
	<div id="app">
	 	@include('include.navbar')
		<div class="row">
		 	<div class="col m3 no-margen">
		 		@include('include.sidebar')
		 	</div>
		 	<div class="col m9 no-margen" style="background-color: #7F7F7FFF;">
					<p class="flow-text">Titulo</p>
		 			<div class="container">
		 				@yield('main')
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			<p class="flow-text" style="text-align: justify;">Un defecto común que hemos visto en muchos frameworks es la falta de soporte para el texto verdaderamente responsivo. Mientras que otros elementos de la página responden fluidamente, el texto aún se redimensiona sobre una base fija. Para mejorar este problema, para páginas cargadas de texto, hemos creado una clase que escala de manera fluida el tamaño del texto y la altura de línea para optimizar la legibilidad del usuario. La longitud de línea se mantiene entre 45-80 caracteres y la altura de línea se escala para ser más grande en las pantallas más pequeñas.</p>
		 			</div>

		 		@include('include.footer')
		 	</div>
		</div>

		
	</div>
	<script src='{{mix("js/app.js")}}'></script>
	{{-- <script type="text/javascript" src="{{ asset('js/plugin/slimScroll/jquery.slimscroll.js') }}"></script> --}}

</body>
</html>
