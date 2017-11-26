@extends('include.base_landing')

@section('title','')

@section('main')
<canvas id="primer"></canvas>
	<p style="position: relative;"></p>
{{-- <div id="segundo"></div> --}}
@endsection

@section('script')

<script type="text/javascript">

	$(document).ready(function() {
		new particle.default(document.getElementById('app'), {
		    dotColor: '#E91E63',
		    lineColor: '#4b367c',
		    density: 9000,
		    parallax: true
		});
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

	
</script>


@endsection