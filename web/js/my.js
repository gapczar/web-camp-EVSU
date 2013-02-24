$(document).ready({
	
	//.....slide
	function slide(){
		$("#slider img:first").fadeOut(function(){
			$(this).appendTo($("#slider")).fadeIn(2000);
		});
	}
	setInterval(function(){slide()},3000);

	
});