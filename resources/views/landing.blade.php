@extends('include.base_landing')

@section('title','')

@section('main')
<canvas id="primer"></canvas>
	<div style="position: relative;">
		<div class="navbar">
		  <nav style="box-shadow: none; background: none;">
		    <div class="nav-wrapper">
		      <a @guest href="{{ url('/') }}" @endguest @auth href="{{ url('/principal') }}" @endauth class="brand-logo">Logo
		      </a>
		      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
			      	<li><a href="">Documentacion</a></li>
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
		    </div>
		  </nav>
		</div>
	</div>
{{-- <div id="segundo"></div> --}}
<main id="conent" class="container" style="background-color: #f5f0f0; height: 500px; position: relative;    border-radius: 10px;margin-bottom: 10px;">
</main>

@endsection

@section('script')

<script type="text/javascript">

$(document).ready(function() {

	$('#conent').css('margin-top',$('#primer').height()-50);
	new particle.default(document.getElementById('app'), {
	    dotColor: '#E91E63',
	    lineColor: '#4b367c',
	    density: 9000,
	    parallax: true
	});


	var granimInstance = new granim({
    element: '#primer',
    direction: 'left-right',
    opacity: [1, 1],
    isPausedWhenNotInView: true,
    states : {
        "default-state": {
            gradients: [
                ['#311f5f', '#E91E63'],
                ['#E91E63', '#311f5f'],
            ],transitionSpeed: 1500
        }
	    }
	});
});
	
</script>


@endsection