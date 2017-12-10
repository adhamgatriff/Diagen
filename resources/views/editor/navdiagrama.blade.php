<div class="navbar-fixed" style="height: 30px !important;"> 
  <nav style="height: 30px !important;line-height: 30px !important;">
    <div class="nav-wrapper">
      <a @guest href="{{ url('/') }}" @endguest @auth href="{{ url('/principal') }}" @endauth class="brand-logo">
        <img src="{{ asset('img/logo2.png') }}" style="width: 30px;margin-left: 10px;margin-top: 2px;">
      </a>
      <a href="#" data-activates="slide-out-" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
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
      <ul class="side-nav" id="slide-out-">
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

        