<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">

      <a @guest href="{{ url('/') }}" @endguest @auth href="{{ url('/principal') }}" @endauth class="brand-logo">
        <img src="{{ asset('img/logo2.png') }}" style="width: 75px;margin-left: 10px;">
      </a>
      <a href="#" data-activates="slide-out-" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        @guest
          <li><a href="{{ url('login') }}">Ingresar</a></li>
          <li><a href="{{ url('register') }}">Registrarse</a></li>

        @endguest
        @auth
         <li>
            <a href="#" data-activates="slide-out_" class="button_edit_user" >
              <i class="material-icons" style="line-height: inherit;height: inherit;">account_circle</i>
            </a>
          </li>
          <li><a href="{{ url('principal') }}">{{ Auth::user()->username }}</a></li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
        @endauth
      </ul>
      <ul class="side-nav" id="slide-out-">
        @guest
          <li><a href="{{ url('login') }}">Ingresar</a></li>
          <li><a href="{{ url('register') }}">Registrarse</a></li>

        @endguest
        @auth
          <li><a href="{{ url('principal') }}">{{ Auth::user()->username }}</a></li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </nav>
</div>

        