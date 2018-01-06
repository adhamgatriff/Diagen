@extends('include.base_landing')

@section('title','')

@section('main')
	<landing-dg logeado="{{ Auth::check() ? '1':'0' }}"></landing-dg>
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