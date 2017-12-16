<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('img/ico32x32.ico') }}" type="image/ico" sizes="32x32">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ups!!</title>

    <!-- Styles -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mio.css') }}">
    @yield('mascss')
</head>
<body id="bodyas" style="background-color: #19171c;">
  <div id="app">
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a @guest href="{{ url('/')}}" @endguest @auth href="{{ url('/principal') }}" @endauth class="brand-logo">
          <img src="{{ asset('img/logo2.png') }}" style="width: 17%;margin-left: 10px;">
        </a>
        <a href="#" data-activates="slide-out-" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
    <div class="row">
      <div class="col m12 s12 ">
        <h2 class="center" style="color: white;position: sticky;">Ups!!</h2>
        <p class="center flow-text" style="color:white;position: sticky;">
          Pagina no encontrada :(
					<p class="center flow-text" style="color:white;position: sticky;">
						Si intentabas exportar un diagrama vuelve a cargar esta pagina :D
					</p>
        </p>
      </div>
    </div>
    @auth
    	<div align="center" style="margin-top: 20px;">
        <a href="{{ url('principal') }}" class="waves-effect waves-light btn degradado btnEditar">
          Volver al menu principal
        </a>
      </div>
    @endauth
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
