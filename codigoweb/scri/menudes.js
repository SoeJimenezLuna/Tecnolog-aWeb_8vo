var estar = false;
$(document).ready(function(){
	
	$(".contenido").scroll(paraMenu);
	 

	
	
});
$('#menu').click(function(){
	var menuCont = $('#menu-contenedor');
	var men = $('#menu');
	if(ancho>=993){
		if(estar==true){
			setTimeout(function(){ 
			if(menuCont.hasClass("menu-animacion-abrir") == true){
			men.removeClass("espRegre");
			men.addClass("esp");
			}else{
			men.removeClass("esp");
			men.addClass("espRegre");
			}
			}, 100);
		}
	}
});

function veri(){
	var menuCont = $('#menu-contenedor');
	var men = $('#menu');
	if(ancho>=993){
		if(estar==false){
			if(menuCont.hasClass("menu-animacion-abrir") == true){
				men.removeClass("esp");	
				OpenClose();
			}
		}
	}
}
function paraMenu(){
	var ancho = screen.width;
	var elem = $(".hea");
	
		var slideOffsetTop = $('.contenido').scrollTop();
		if(slideOffsetTop >= 80){
			elem.css("width","100%");
			elem.addClass("flotante");
			estar = true;
		}else if(slideOffsetTop < 10){
			elem.removeClass("flotante");
			estar = false;
			veri();

		}
		
}
/*
window.addEventListener('scroll',menuscroll);

function menuscroll(){
	alert("asda");
	var menu = document.getElementById('hea');
	if(window.pageYOffset>0){
		menu.classList.add('flotante');
	}else{
		menu.classList.remove('flotante');
	}
}*/