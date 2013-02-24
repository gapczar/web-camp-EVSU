$(document).ready({
	
	//.....slide
	function slide(){
		$("#selector").fadeOut(function(){
			$(this).appendTo($("#target")).fadeIn(2000);
		});
	}
	setInterval(function(){slide()},3000);

	
});