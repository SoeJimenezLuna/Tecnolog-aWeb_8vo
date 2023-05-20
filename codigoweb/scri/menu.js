


$(document).ready(function(){
 Menu();
});

var ancho = screen.width;
var contadorMenu = 1;
function Menu(){
		
		
		
		
		var $CCC = $('#CCC');
		$CCC.slideUp(500);
		$('#CPC').click(function(){
		$CCC.slideToggle(500);
		});
		var $UCC = $('#UCC');
		$UCC.slideUp(500);
		$('#UPC').click(function(){
		$UCC.slideToggle(500);
		});
		$('#menu').click(OpenClose);
		$('#ico-quitar-tablet').click(OpenClose);



		
}
function OpenClose(){
		var menu = document.getElementById("menu");
		var quitarmenu = document.getElementById("ico-quitar-tablet");
		var contenedorMenu = document.getElementById("menu-contenedor");
		var contenedorContenido = document.getElementById("contenido-contenedor");
			if(ancho>=993){
				menu.classList.toggle('fa-align-left');
				menu.classList.toggle('fa-times');
				//contenedorMenu.classList.toggle('menu-animacion-abrir');
				//contenedorMenu.classList.toggle('menu-animacion-cerrar');
				if(contadorMenu==1){
			
					contenedorMenu.classList.add('menu-animacion-abrir');
					contenedorMenu.classList.remove('menu-animacion-cerrar');
					

					contenedorContenido.classList.add('contenido-animacion-cerrar');
					contenedorContenido.classList.remove('contenido-animacion-abrir');
					contadorMenu=0;
				}else{
					contadorMenu=1;
					contenedorMenu.classList.add('menu-animacion-cerrar');
					contenedorMenu.classList.remove('menu-animacion-abrir');
					


					contenedorContenido.classList.add('contenido-animacion-abrir');
					contenedorContenido.classList.remove('contenido-animacion-cerrar');
				}
			}else{

					if(contadorMenu==1){
					contenedorMenu.classList.remove('contenido-menu-peque-cerrar');
					contenedorMenu.classList.add('contenido-menu-peque-abrir');
					
					contadorMenu=0;
				}else{
					contadorMenu=1;
					contenedorMenu.classList.remove('contenido-menu-peque-abrir');
					contenedorMenu.classList.add('contenido-menu-peque-cerrar');
					
					
				}
			}


		}
