$(document).ready({
	
	//.....slide
	function slide(){
		$("#content #slider img:first").fadeOut(function(){
			$(this).appendTo($("#content #slider")).fadeIn(2000);
		});
	}
	setInterval(function(){ slide() },3000);

});