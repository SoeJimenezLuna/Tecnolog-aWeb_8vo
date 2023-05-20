$(document).ready(function() {
	var ventana_alto = $(window).height();
	var ventana_ancho = $(window).width();

	
	
	$(window).on('scroll',function(){
		if(ventana_ancho <=992){

			if($(window).scrollTop() >= ventana_alto){
				$('.menu').addClass('menu-desple');
			}else if($(window).scrollTop() < (ventana_alto/5)){
				$('.menu').removeClass('menu-desple');
			}
		}
	});

	$("#main" ).click(function() {
  		if(ventana_ancho <=992){
  		$('nav').slideToggle(500);

  		}
	});

	$('#close-duda').click(function(){
		$('.mensaje-dudas').css("display","none");
	});
	setTimeout(function(){ 
		$('.mensaje-dudas').css("display","none");
	}, 3000);


	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});

	$(document).on('click','#ico-gi',function(){

		if($('#ico-gi i').hasClass("giro") == true){
			$('#ico-gi i').removeClass("giro");
			$('#ico-gi i').addClass("giroReversion");
        	$(".children").scrollTop(0);	
		}else{
			$('#ico-gi i').addClass("giro");
			$('#ico-gi i').removeClass("giroReversion");
		}
	});
});

