
var conte = document.getElementsByClassName('form-control');


var abrirAgregar = document.getElementById('abrirVentanaAgregar');
var varquitarVentanaAgregar = document.getElementById('quitar-ventana-agregar');
	abrirAgregar.addEventListener('click',mainAbrir);
	varquitarVentanaAgregar.addEventListener('click',mainAbrir);
var contador = 1;

//var bo = document.querySelector('.contenido');
//var altura = bo.clientHeight;

function mainAbrir(){
	
	
	
	var ventanaAgregar = document.getElementById('ventana-agregar');
	VentAgregar();

function VentAgregar(){
	if(contador==1){
			
			ventanaAgregar.style.top='0%';
			//ventanaAgregar.style.height= altura+'px';
			ventanaAgregar.classList.remove('animate__fadeOutUp');
			ventanaAgregar.classList.add('animate__fadeInDownBig');
			contador = 0;
	}else{
			contador = 1;
			
			ventanaAgregar.classList.add('animate__fadeOutUp');
			ventanaAgregar.classList.remove('animate__fadeInDownBig');
			for(var j=0;j<conte.length;j++){
			conte[j].classList.remove('error');
			conte[j].classList.remove('success');
			}	

	}
}
}
function mainMod(){
	
	
	
	var ventanaAgregar = document.getElementById('ventana-modificar');
	VentAgregar();

function VentAgregar(){
	if(contador==1){
			
			ventanaAgregar.style.top='0%';
			//ventanaAgregar.style.height= altura+'px';
			ventanaAgregar.classList.remove('animate__fadeOutUp');
			ventanaAgregar.classList.add('animate__fadeInDownBig');
			contador = 0;
	}else{
			contador = 1;
			
			ventanaAgregar.classList.add('animate__fadeOutUp');
			ventanaAgregar.classList.remove('animate__fadeInDownBig');
			for(var j=0;j<conte.length;j++){
			conte[j].classList.remove('error');
			conte[j].classList.remove('success');
			}	

	}
}
}

/*
var btnModificar = document.getElementsByClassName('abrirVentanaModificar');


var ventanaModificar = document.getElementById('ventana-modificar');
var quiVentanaModificar = document.getElementById('quitar-ventana-modificar');

var contador2 = 1;
//var alturados = bo.clientHeight;

for(var i=0;i<btnModificar.length;i++){
	btnModificar[i].addEventListener('click',Mos);
}
	quiVentanaModificar.addEventListener('click',Mos);	
function Mos(){
	//e.preventDefault();
	if(contador2==1){
		//ventanaModificar.style.height= alturados+'px';
		
		ventanaModificar.style.top='0%';
		ventanaModificar.classList.remove('animate__fadeOutUp');
		ventanaModificar.classList.add('animate__fadeInDownBig');
		contador2=0;
		//e.preventDefault();
	}else{
		contador2=1;
		
		ventanaModificar.classList.add('animate__fadeOutUp');
		ventanaModificar.classList.remove('animate__fadeInDownBig');
		for(var k=0;k<conte.length;k++){
			conte[k].classList.remove('error');
			conte[k].classList.remove('success');
		}	
	}
}
*/

/*ventana aceptacion*/
/*
var btnAceptacion = document.querySelectorAll('.abrirVentanaAceptacion');
var ventanaAceptacion = document.getElementById('ventana-modal-aceptacion');
var quiVentanaaAceptacion = document.getElementById('quitar-ventana-aceptacion');
var aceVentanaaAceptacion = document.getElementById('aceptar-ventana-aceptacion');

contadorAceptacion = 1;
var verificarAceptacion = false;
for(var i2=0;i2<btnModificar.length;i2++){
	btnAceptacion[i2].addEventListener('click',Vacep);
}
	quiVentanaaAceptacion.addEventListener('click',Vacep);
var link='';
	function changeAce(){
		verificarAceptacion=true;
		Vacep();
	}

function Vacep(e){

	
	if(contadorAceptacion==1){
		//ventanaModificar.style.height= alturados+'px';
		
		
		ventanaAceptacion.style.top='0%';
		ventanaAceptacion.classList.remove('animate__fadeOutUp');
		ventanaAceptacion.classList.add('animate__fadeInDownBig');
		link = this.getAttribute('href');
		contadorAceptacion=0;
	}else{
		contadorAceptacion=1;
		
		ventanaAceptacion.classList.add('animate__fadeOutUp');
		ventanaAceptacion.classList.remove('animate__fadeInDownBig');
	}
	
	if(verificarAceptacion==true){
		verificarAceptacion=false;
		window.location.href= link;
		setTimeout(function(){
			modalMensaje(1);
		},1000);
	}
		e.preventDefault();

}
*/

var x;
 var y;

function Bloqueo(){
	 x = window.scrollX;
	 y = window.scrollY;
	window.scrollTo(0, 0);
	document.getElementsByTagName("html")[0].style.overflow = "hidden";
}
	
function Desbloquear(){
	document.getElementsByTagName("html")[0].style.overflow = "auto";
	window.scrollTo(x,y);
}
/*inicia modal mensaje*/
	var textDialog = document.getElementById('texto-dialog');
	var ventanaDialog = document.getElementById('ventana-dialog');
	
	function modalMensaje(n){
		if(n==1){
			textDialog.innerHTML = 'Eliminación exitosa';
			document.getElementById('img-dialog').src = "../imagenes/trash.png";
		}else if(n==2){
			textDialog.innerHTML = 'Registro exitoso';
			document.getElementById('img-dialog').src = "../imagenes/checked.png";
		}else if(n==3){
			textDialog.innerHTML = 'Modificación exitosa';
			document.getElementById('img-dialog').src = "../imagenes/refresh.png";
		}else if(n==4){
			textDialog.innerHTML = 'No puedes modificar a no pagado';
			document.getElementById('img-dialog').src = "../imagenes/danger.png";
		}else if(n==10){
			textDialog.innerHTML = 'Recarga recibida';
			document.getElementById('img-dialog').src = "../imagenes/recarga.png";
		}
		ventanaDialog.style.top='0%';
		ventanaDialog.classList.remove('animate__backOutUp');
		ventanaDialog.classList.add('animate__backInDown');
		setTimeout(function(){
			ventanaDialog.classList.add('animate__backOutUp');
			ventanaDialog.classList.remove('animate__backInDown');
		},2500);

	}
/*termina modal mensaje*/