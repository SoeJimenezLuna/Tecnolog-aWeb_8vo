$(function(){
console.log('Jquery working');


});

$(document).ready(function(){
 	document.getElementById('correoM').disabled = true;
$('#filtro').change(function(e){
	var fil = $('#filtro').val();
	console.log(fil);
	$('#et').html(fil);
	$.ajax({



        url: 'ListEC.php',
        type: 'GET', 
        success: function (response) {
        		//console.log(response);
				let template = '';
				let tasks = JSON.parse(response);
				var to_paginas = Math.ceil(tasks/fil);
				for(var i = 1 ; i<=to_paginas;i++){
					template += `	
				
									  <a class="numb pagina_click" Num_pag="${i}">
                    				${i}</a>
									  `
				}
				$('#task2').html(template);
        } 
	});
	$.ajax({	

        url: 'ListE.php',
        type: 'POST',
        data: { fil }, 
       
        success: function (response) {
        		console.log(response);
										let tasks = JSON.parse(response);
										let template = '';
										tasks.forEach( task => {

											template += `
										
									<div class='table-item' >${task.IdE}  </div>
									<div class='table-item'>${task.email }</div>
									<div class='table-item'>${task.NombreE }</div>
									<div class='table-item'>${task.Apellido_PaE }</div>
									<div class='table-item'>${task.Apellido_MaE }</div>
									<div class='table-item'>${task.motivo }</div>
									<div class='table-item'>${task.telefono }</div>
									<div class="task-modifica table-item" taskIdU="${task.IdE}" ><i class="far fa-edit"></i> </div>
									<div class="task-delete table-item" taskId="${task.IdE }" ><i class="fas fa-trash-alt"></i> </div>
									
									  `
											});
										$('#taks').html(template);

        } 
 	
	});

	
});



$(document).on('click','.pagina_click',function(){
	var fil = $('#filtro').val();
	let element = $(this)[0];
 	var num = $(element).attr('Num_pag');
 	console.log(num);
 	$.ajax({

        url: 'ListE.php',
        type: 'POST',
        data: { num,fil }, 
       
        success: function (response) {
        		console.log(response);
										let tasks = JSON.parse(response);
										let template = '';
										tasks.forEach( task => {

											template += `
										
									<div class='table-item' >${task.IdE}  </div>
									<div class='table-item'>${task.email }</div>
									<div class='table-item'>${task.NombreE }</div>
									<div class='table-item'>${task.Apellido_PaE }</div>
									<div class='table-item'>${task.Apellido_MaE }</div>
									<div class='table-item'>${task.motivo }</div>
									<div class='table-item'>${task.telefono }</div>
									<div class="task-modifica table-item" taskIdU="${task.IdE}" ><i class="far fa-edit"></i> </div>
									<div class="task-delete table-item" taskId="${task.IdE }" ><i class="fas fa-trash-alt"></i> </div>
									
									  `
											});
										$('#taks').html(template);

        } 
 	})
})

$('#search').keyup(function(e){
	let search = $('#search').val();
	console.log(search);
	$.ajax({



        url: 'ListEC.php',
        type: 'GET', 
        success: function (response) {
        		
				let template = '';
					template += `	
				
									  <a class="numb pagina_click" >
                    				1</a>
									  `
				
				$('#task2').html(template);
        } 
 	
	
	
	});
	$.ajax({
        url: 'buscar.php',
        type: 'POST',
        data: { search }, 
       
        success: function (response) {	
        	if($('#search').val() == ""){ 
        		RecargarAuto();
        	}

        	if($('#search').val()){

          
										console.log(response);
										let tasks = JSON.parse(response);
										let template = '';
										tasks.forEach( task => {

											template += `
										
									<div class='table-item' >${task.IdE}  </div>
									<div class='table-item'>${task.email }</div>
									<div class='table-item'>${task.NombreE }</div>
									<div class='table-item'>${task.Apellido_PaE }</div>
									<div class='table-item'>${task.Apellido_MaE }</div>
									<div class='table-item'>${task.motivo }</div>
									<div class='table-item'>${task.telefono }</div>
									<div class="task-modifica table-item" taskIdU="${task.IdE}" ><i class="far fa-edit"></i> </div>
									<div class="task-delete table-item" taskId="${task.IdE }" ><i class="fas fa-trash-alt"></i> </div>
									
									  `
											});
										$('#taks').html(template);
										
        
        	}
        } 
      })
})

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-xs-1';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-xs-1';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

RecargarAuto();
	//form agregar

var idVerficar;	
$('#form').submit(function(e){
	//var idEmpleado =  $('#id').val().trim();
	//$.post('buscarID.php',{idEmpleado},function(response){
	//	const valor = JSON.parse(response);
	//	idVerficar= valor.Id;	
			AgregarEmpleado();
	//});

	e.preventDefault();   
}); //termina form agregar 

function AgregarEmpleado(){
	const id = document.getElementById('id');
		const nombre = document.getElementById('nombre');
		const apellidoPaterno = document.getElementById('apellidoPaterno');
		const apellidoMaterno = document.getElementById('apellidoMaterno');
		const correo = document.getElementById('correo');
		const contra = document.getElementById('motivo');
		//const contrados = document.getElementById('contrados');
		const telefono = document.getElementById('telefono');
		var staId = false;
		var staNom = false;
		var staApP = false;
		var staApM = false;
		var staCorre = false;
		var staCon = false;
		var staCon2 = false;
		var staTel = false;	
	
    
    
	//para remover los espacios
	const idValue = id.value.trim();
	const nombreValue = nombre.value;
	const apellidoMaternoValue = apellidoMaterno.value;
	const apellidoPaternoValue = apellidoPaterno.value;
	const correoValue = correo.value;
	const contraValue = contra.value;
	//const contradosValue = contrados.value;
	const telefonoValue = telefono.value;


	if(idValue === '') {
		setErrorFor(id, 'ID vacío');
		staId = false;
	} else{
		setSuccessFor(id);
		staId = true; 
	}

	if(nombreValue === '') {
		setErrorFor(nombre, 'Nombre vacío');
		staNom = false;
	} else {
		setSuccessFor(nombre);
		staNom = true;
	}

	if(apellidoPaternoValue === '') {
		setErrorFor(apellidoPaterno, 'apellido  vacío');
		staApP = false;
	} else {
		setSuccessFor(apellidoPaterno);
		staApP = true;
	}
	if(apellidoMaternoValue === '') {
		setErrorFor(apellidoMaterno, 'apellido  vacío');
		staApM = false;
	} else {
		setSuccessFor(apellidoMaterno);
		staApM = true;
	}
	
	if(correoValue === '') {
		setErrorFor(correo, 'E-mail vacío');
		staCorre = false;
	} else if (!isEmail(correoValue)) {
		setErrorFor(correo, 'E-mail inválido, ingrese uno valido');
		staCorre = false;
	} else {
		setSuccessFor(correo);
		staCorre = true;
	}
	
	if(contraValue === '') {
		setErrorFor(contra, 'Contraseña vacía');
		staCon = false;
	} else {
		setSuccessFor(contra);
		staCon = true;
	}
	
	
	/*if(contradosValue === '') {
		setErrorFor(contrados, 'contraseña vacía');
		staCon2 = false;
	} else{
		setSuccessFor(contrados);
		staCon2 = true;
	}
	*/
	if(telefonoValue === '') {
		setErrorFor(telefono, 'Teléfono vacío');
		staTel=false;
	} else {
		setSuccessFor(telefono);
		staTel=true;
	}
	if(staId == true && staNom == true  && staApP == true && staApM == true && staCorre == true && staCon == true  && staTel == true){
		mainAbrir();
		setTimeout(function(){
			modalMensaje(2);
			id.value = ''; 
	    	nombre.value = '';
	    	apellidoPaterno.value = ''; 
	    	apellidoMaterno.value = ''; 
	    	correo.value = '';  
	    	motivo.value = ''; 
	    	
	    	telefono.value = '';
		},1000);

	 const postData = {
		
		 IdE : $('#id').val().trim(), 
		NombreE : $('#nombre').val(),
		Apellido_PaE : $('#apellidoPaterno').val(),
		Apellido_MaE : $('#apellidoMaterno').val(),
		CorreoE : $('#correo').val(),
		MotivoE : $('#motivo').val(),
		Num_telE : $('#telefono').val() 

	};	
	$.post('subirEmpleado.php' , postData , function (response) {
		console.log(response);
		RecargarAuto();		    
	}); 
	}
}

 $('#formDos').submit(function(e){
 	const formM = document.getElementById('formDos');
	const idM = document.getElementById('idM');
	const nombreM = document.getElementById('nombreM');
	const apellidoPaternoM = document.getElementById('apellidoPaternoM');
	const apellidoMaternoM = document.getElementById('apellidoMaternoM');
	const contraM = document.getElementById('motivoM');
	//const contradosM = document.getElementById('contradosM');
	const telefonoM = document.getElementById('telefonoM');
	var staIdM = false;
	var staNomM = false;
	var staApPM = false;
	var staApMM = false;
	var staConM = false;
	var staCon2M = false;
	var staTelM = false;	

	//para remover los espacios
	const idMValue =  idM.value.trim();
	const nombreMValue = nombreM.value.trim();
	const apellidoPaternoMValue = apellidoPaternoM.value.trim();
	const apellidoMaternoMValue = apellidoMaternoM.value.trim();
	const contraMValue = contraM.value.trim();
	//const contradosMValue = contradosM.value.trim();
	const telefonoMValue = telefonoM.value.trim();
	
	
	if(idMValue === '') {
		setErrorFor(idM, 'ID vacío');
		staIdM = false;
	} else {
		setSuccessFor(idM);
		staIdM = true;
	}

	if(nombreMValue === '') {
		setErrorFor(nombreM, 'Nombre vacío');
		staNomM = false;
	} else {
		setSuccessFor(nombreM);
		staNomM = true;
	}

	if(apellidoPaternoMValue === '') {
		setErrorFor(apellidoPaternoM, 'apellido vacío');
		staApPM = false;
	} else {
		setSuccessFor(apellidoPaternoM);
		staApPM = true;
	}
	if(apellidoMaternoMValue === '') {
		setErrorFor(apellidoMaternoM, 'apellido vacío');
		staApMM = false;
	} else {
		setSuccessFor(apellidoMaternoM);
		staApMM = true;
	}
	
	
	if(contraMValue === '') {
		setErrorFor(contraM, 'Motivo vacía');
		staConM = false;
	} else {
		setSuccessFor(contraM);
		staConM = true;
	}
	
	
	

	if(telefonoMValue === '') {
		setErrorFor(telefonoM, 'Teléfono vacío');
		staTelM = false;
	} else {
		setSuccessFor(telefonoM);
		staTelM = true;

	}
	
	if(staIdM == true && staNomM == true  && staApPM == true && staApMM == true && staConM == true  && staTelM == true){
		Mos();
		setTimeout(function(){
			modalMensaje(3);
			idM.value = ''; 
	    	nombreM.value = '';
	    	apellidoPaternoM.value = ''; 
	    	apellidoMaternoM.value = ''; 
	    	//motivoM.value = ''; 
	    	//contradosM.value = ''; 
	    	telefonoM.value = '';
		},1000);
		
	

		const postData = {
		
		 IdEM : $('#idM').val(), 
		NombreEM : $('#nombreM').val(),
		Apellido_PaEM : $('#apellidoPaternoM').val(),
		Apellido_MaEM : $('#apellidoMaternoM').val(),
		
		motivoEM : $('#motivoM').val(),
		Num_telEM : $('#telefonoM').val() 

		};	
		$.post('Modificar.php' , postData , function (response) {
		console.log(response);
		RecargarAuto();

		    
		});
	}
	e.preventDefault();
});






function RecargarAuto() {
var fil = $('#filtro').val();
	console.log(fil);
	$('#et').html(fil);
	$.ajax({



        url: 'ListEC.php',
        type: 'GET', 
        success: function (response) {
        		//console.log(response);
				let template = '';
				let tasks = JSON.parse(response);
				var to_paginas = Math.ceil(tasks/fil);
				for(var i = 1 ; i<=to_paginas;i++){
					template += `	
				
									  <a class="numb pagina_click" Num_pag="${i}">
                    				${i}</a>
									  `
				}
				$('#task2').html(template);
        } 
 	
	
	
	});

	
$.ajax({
										url :'ListE.php',
										type :'GET', 
										success : function(response){
										console.log(response);
										let tasks = JSON.parse(response);
										let template = '';
										tasks.forEach( task => {
										template += `
										
									<div class='table-item' >${task.IdE}  </div>
									<div class='table-item'>${task.email }</div>
									<div class='table-item'>${task.NombreE }</div>
									<div class='table-item'>${task.Apellido_PaE }</div>
									<div class='table-item'>${task.Apellido_MaE }</div>
									<div class='table-item'>${task.motivo }</div>
									<div class='table-item'>${task.telefono }</div>
									<div class="task-modifica table-item" taskIdU="${task.IdE}" ><i class="far fa-edit"></i> </div>
									<div class="task-delete table-item" taskId="${task.IdE }" ><i class="fas fa-trash-alt"></i> </div>
									
									  `
											});
										$('#taks').html(template);
										}	
										})	
} 

/* ventana modificar */

var ventanaModificar = document.getElementById('ventana-modificar');

$(document).on('click','.task-modifica',Mos)
$(document).on('click','#quitar-ventana-modificar',Mos)
$(document).on('click','.task-modifica',function(){
		let element = $(this)[0];
 		var idedit = $(element).attr('taskIdU');
		console.log(idedit);
		$.post('ObtenerModificar.php',{idedit : idedit},function(response){
		const valor = JSON.parse(response);
		$('#idM').val(valor.Id_e);
		$('#nombreM').val(valor.Nombre);
		$('#apellidoPaternoM').val(valor.Apellido_Pa);
		$('#apellidoMaternoM').val(valor.Apellido_Ma);
		$('#correoM').val(valor.email);
		$('#motivoM').val(valor.motivo);
		$('#telefonoM').val(valor.telefono);
		});		
		});




var contador2 = 1;
//var alturados = bo.clientHeight;



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




/* termina modificar */
/* ventana aceptacion */
contadorAceptacion = 1;
var verificarAceptacion = false;
var ventanaAceptacion = document.getElementById('ventana-modal-aceptacion');
$(document).on('click','.btn-cancelar',VentanaAceptar)
$(document).on('click','.task-delete',VentanaAceptar)
$(document).on('click','.btn-aceptar',ChangeAce)
function ChangeAce(){
	verificarAceptacion = true;
	VentanaAceptar();
}
function VentanaAceptar(){ 

if(contadorAceptacion==1){
		//ventanaModificar.style.height= alturados+'px';
		let element = $(this)[0];
 		let id1 = $(element).attr('taskId');
 		$('#idborrar').html(id1);

		ventanaAceptacion.style.top='0%';
		ventanaAceptacion.classList.remove('animate__fadeOutUp');
		ventanaAceptacion.classList.add('animate__fadeInDownBig');
	
		contadorAceptacion=0;
	}else{
		contadorAceptacion=1;
		
		ventanaAceptacion.classList.add('animate__fadeOutUp');
		ventanaAceptacion.classList.remove('animate__fadeInDownBig');
	}
	
	if(verificarAceptacion==true){
		verificarAceptacion=false;
		setTimeout(function(){
			modalMensaje(1);
		},1000);

		var id = $('#idborrar').text();
		$.post('eliminar.php',{id : id},function(response){
		console.log(response);
		RecargarAuto();
		});		
	}


}
 


														
});

