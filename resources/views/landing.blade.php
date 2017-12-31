@extends('include.base_landing')

@section('title','')

@section('main')
<canvas id="primer"></canvas>
	<div style="position: relative;">
		<div class="navbar">
		  <nav style="box-shadow: none; background: none;">
		    <div class="nav-wrapper">
		      <a href="#" data-activates="mobile" class="button-collapse show-on-small"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-small-only">
			      	<li><a href="resources/Doc.pdf" target="_blank">Manual de Usuario</a></li>
		        @guest
		        	<a href="{{ url('login') }}" class="waves-effect waves-light btn Wradius" style="background: white;color: #311f5f;box-shadow: 3px 3px 20px 0px #000;">Ingresar</a>
		        	<a href="{{ url('register') }}" class="waves-effect waves-light btn Wradius" style="background: white;color: #E91E63;box-shadow: 3px 3px 20px 0px #000;">Registrarse</a>
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
		      <ul class="side-nav" id="mobile">
			      <li><a href="">Manual de Usuario</a></li>
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
	<div class="row" style="margin-top: 60px;">
		<div class="col m11 s12 offset-m1" style=" position: relative;">
			<div class="row">
				<div class="col m12 l6" style="width: inherit;">
					<img class="responsive-img" src="{{ asset('img/logo3.png') }}" style="min-width: 25%;width: 65%;display:block;margin: 0 auto;">
				</div>
				<div class="col m12 l6 hide-on-small-only">
					<h1 style="font-weight: 300;color: white;text-align: center;text-shadow: 5px 3px 7px #0a0a0a;">Diagen</h1>
					<h4 style="color: white;font-weight: 200;text-align: center;text-shadow: 5px 3px 3px #0a0a0a;">Generador a partir de diagramas</h4>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="row" style="margin-bottom: 0px;">
		<main id="conent" class="col m10 s12 offset-m1" style="background-color: #f5f0f0; position: relative;border-radius: 10px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;">

	{{-- inf general --}}
		<h4 style="font-weight: 400;padding-left: 5px;">Informacion General</h4>
		<p class="flow-text" style="text-align: justify;padding: 0 20px 0 20px">
			Generador de código fuente de Sql, Php, Python y Java a partir de diagramas
			entidad-relación y diagramas de clases creados por el usuario, destinado a ser utilizado
			como herramienta de enseñanza para los estudiantes de bases de datos y programación
			III en la carrera de Ingeniería de Sistemas del I.U.P.S.M extensión Barinas o como
			apoyo en el proceso de desarrollo de software por programadores profesionales.
		</p>

	{{-- caract --}}
		<div>
			<h4 style="font-weight: 300;text-align: center;">Caracteristicas</h4>
			<div class="row" style="margin-top: 40px;">

				<div class="col s6 m4"  style="color:#E91E63">
          <div class="center promo">
            <i class="large material-icons">flash_on</i>
            <p class="promo-caption">Rapidez</p>
          </div>
        </div>
        <div class="col s6 m4"  style="color:#4b367c">
          <div class="center promo">
            <i class="large material-icons">pan_tool</i>
            <p class="promo-caption">Versatilidad</p>
          </div>
        </div>
        <div class="col s6 m4" style="color:#E91E63">
          <div class="center promo">
            <i class="large material-icons">storage</i>
            <p class="promo-caption">Almacenamiento</p>
          </div>
        </div>
        <div class="col s6 m4" style="color:#4b367c">
          <div class="center promo">
            <i class="large material-icons">airline_seat_individual_suite</i>
            <p class="promo-caption">Comodidad</p>
          </div>
        </div>
        <div class="col s6 m4" style="color:#E91E63">
          <div class="center promo">
            <i class="large material-icons">event_available</i>
            <p class="promo-caption">Disponibilidad</p>
          </div>
        </div>
        <div class="col s6 m4" style="color:#4b367c">
          <div class="center promo">
            <i class="large material-icons">style</i>
            <p class="promo-caption">Estilo</p>
          </div>
        </div>
			</div>
	{{-- 2 geraficas pequeñas --}}

			<div style="margin-top: 40px;margin-bottom: 20px;">
				<h4 style="font-weight: 300;text-align: center;">Informacion del sistema</h4>

				<div class="col s12 m6" style="margin-bottom: 15px;">
					<h5 style="font-weight: 400;text-align: center;">Diagramas creados:  ER vs Clases </h5>
					<div class="col s12" id="graph1" style="height: 300px;background-color:#f5f0f0"></div>
				</div> 	

				<div class="col s12 m6" style="margin-bottom: 15px;">
					<h5 style="font-weight: 400;text-align: center;">Balance cantidad de diagramas por usuario</h5>
					<div class="col s12" id="graph2" style="height: 300px;background-color:#f5f0f0"></div>
				</div> 

			</div>
		</div>
	</main>
	<div class="col m1 hide-on-small-only"></div>
</div>
@endsection

@section('script')

<script type="text/javascript">

$(document).ready(function() {
 $(".button-collapse").sideNav();
	// $('#conent').css('margin-top',$('#primer').height()-50);
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

	datos();
});

function datos(){

	let m = new Array();
	$.ajax({
		url: '{{ url('api/datosDiag') }}',
		type: 'POST',
		data: {_token: '{{csrf_token()}}'}
	})
	.done( data => {
		graficaDiag(data.er,data.dc); 
		diagCreadosxUsuarios(data.dt,data.us) 
	});
}

function diagCreadosxUsuarios(dt,us) {
	var myTorta = echarts.init(document.getElementById('graph2'));
		option = {
			grid: {

			},
	    tooltip: {
	        trigger: 'item',
	        formatter: "{a} <br/>{b}: {c} ({d}%)"
	    },
	    legend: {
	        orient: 'vertical',
	        x: 'left',
	        data: ['Usuarios','Diagramas']
	    },
	    series: [
	      {
	        name:'Cantidad',
	        type:'pie',
	        color: ['#E91E63','#311f5f'],
	        radius: ['55%', '90%'],
	        avoidLabelOverlap: false,
	        label: {
	          normal: {
	            show: false,
	            position: 'center'
	          },
	          emphasis: {
	              show: true,
	              textStyle: {
	                fontSize: '18',
	                fontWeight: 'bold'
	              }
	          }
	        },
	        labelLine: {
	          normal: {
	            show: false
	          }
	        },
	        data: [{value:us, name:'Usuarios'},
	        				{value:dt, name:'Diagramas'}]
	      }
	    ]
		};
	myTorta.setOption(option);
}

function graficaDiag(er,dc){

	var myTorta = echarts.init(document.getElementById('graph1'));
	option = {
		grid: {

		},
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        x: 'left',
        data: ['Entidad-Relacion','Clases']
    },
    series: [
      {
        name:'Cantidad',
        type:'pie',
        color: ['#E91E63','#311f5f'],
        radius: ['55%', '90%'],
        avoidLabelOverlap: false,
        label: {
          normal: {
            show: false,
            position: 'center'
          },
          emphasis: {
              show: true,
              textStyle: {
                fontSize: '18',
                fontWeight: 'bold'
              }
          }
        },
        labelLine: {
          normal: {
            show: false
          }
        },
        data: [{value:er, name:'Entidad-Relacion'},
        				{value:dc, name:'Clases'}]
      }
    ]
	};

	myTorta.setOption(option);
}
	
</script>


@endsection