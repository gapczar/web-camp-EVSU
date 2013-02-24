$(document).ready({
	
	//.....slide
	function slide(){
		$("#slider-wrap img:first").fadeOut(function(){
			$(this).appendTo($("#slider-wrap")).fadeIn(2000);
		});
	}
	setInterval(function(){slide()},3000);

	
});