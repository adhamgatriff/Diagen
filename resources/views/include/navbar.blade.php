<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">

      <a @guest href="{{ url('/') }}" @endguest @auth href="{{ url('/principal') }}" @endauth class="brand-logo">Logo</a>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @guest
          <li><a href="{{ url('login') }}">Ingresar</a></li>
          <li><a href="{{ url('register') }}">Registrarse</a></li>

        @endguest
        @auth
          <li><a href="{{ url('principal') }}">{{ Auth::user()->username }}</a></li>
          <li><a href="{{ Auth::logout() }}">Salir</a></li>

        @endauth
      </ul>
    </div>
  </nav>
</div>

        