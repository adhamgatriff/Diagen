var toggle_nav = false; 


$(document).ready(function() {
	$('.page-footer').css('margin-left', $('.side-nav').width());

	if ($(window).width()<=600) {
		$('.side-show').hide();
	}
});

$(window).resize(function(event) {
// console.log('af');
	if ($(window).width()<=600) {
		 $('.side-show').hide();
	}else{
		$('.side-show').show();
	}
});

$('.top-nav').on('click',() =>{
	if (toggle_nav) {
		$('.side-show').hide();
		toggle_nav= false;
	}else{
		$('.side-show').show();
		toggle_nav= true;
	}

});

// $('.side-show').removeClass('hide-on-small-only');