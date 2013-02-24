$(document).ready({
	
	var imgsrc;

	//.....slide
	function slide(){
		$("#slider img:first").fadeOut(function(){
			$(this).appendTo($("#slider")).fadeIn(2000);
		});
	}
	setInterval(function(){slide()},3000);

	$(".category").click(function(){

		imgsrc = $(this).children(img).atttr("src");

		$("#zoom img").attr("src",imgsrc);

		$("#zoom").css({"display":"block","height":"30px","width":"30px"})
					.animate({"width":"600px","height","400px"},"slow");
	});
});