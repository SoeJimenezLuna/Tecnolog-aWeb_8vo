<?php 

include('conexion.php');

header("Content-Type: text/html;charset=utf-8");


session_start();

if (!isset($_SESSION['user'])) {
  header("Location:../");
}
$Correo=$_SESSION['user'];
/*$siesta=mysqli_num_rows(mysqli_query($miconexion,"SELECT * FROM admin WHERE Correo='$Correo' "));
if ($siesta==true) {
	 session_start();
}else{
	$siesta=mysqli_num_rows(mysqli_query($miconexion,"SELECT * FROM empleados WHERE Correo='$Correo' "));
	if($siesta==true){
		$Correo=$_SESSION['user'];
		header("Location:../PuntoVentaEmpleado/");
	}
}*/

if (isset($_REQUEST['cerrar'])) {
  session_destroy();
  header("Location:../");
}

 
 ?>
 <?php 
 	
 	

	
	$resultado = pg_query($miconexion,"SELECT * FROM persona WHERE id_persona=1 ");
	$row=pg_fetch_object($resultado);
	$Nombre_ad=$row->nombre;
   

  ?>
 <!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/rejilla.css">
	<link rel="stylesheet" type="text/css" href="../css/general.css">
	<link rel="stylesheet" type="text/css" href="../css/generalMenu.css">
	<link rel="stylesheet" type="text/css" href="../css/tab.css">
	<link rel="stylesheet" type="text/css" href="../css/ventanaModal.css">

	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<title>Empleado</title>
	<link rel="shortcut icon"  href="../imagenes/tiendamaxico.ico">
	<script src="../scri/jquery-3.2.1.js"></script>
	<script src="../scri/menu.js"></script>
	<meta charset="utf-8">
</head>
<body class="body">

	<div class="ventana-modal animate__animated "  id="ventana-agregar">
		<div class="cuerpo-modal col-xs-11 col-lg-9 pg-lg-2 pg-xs-1">
			<div class="row">
				<i class="fa fa-times" id="quitar-ventana-agregar"></i>
				<div class="titulo-cuerpo">
					<h2>Agregar Alumno</h2>
					<div class="greca-cuerpo"></div>
				</div>
				<form class="col-xs-12" id="form" action="#">
					<div class="row ">
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-xs-1">
						<label >ID</label>
						<input  type="text" name="" id="id" >	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Nombre</label>
						<input  type="text" name="" id="nombre">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Apellido Paterno</label>
						<input  type="text" name="" id="apellidoPaterno">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Apellido Materno</label>
						<input  type="text" name="" id="apellidoMaterno">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Correo</label>
						<input  type="text" name="" id="correo">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Motivo</label>
						<input  type="text" name="" id="motivo">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Teléfono</label>
						<input  type="number"  name="" id="telefono">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small class="">Error massage</small>
						</div>
						
					</div>
					<input type="submit" name=""class="btn-form mt-xs-1" value="Agregar"> 
				</form>
			</div>
		</div>
	</div>

	<!-- aqui empieza-->
		<div class="ventana-modal animate__animated " id="ventana-modificar">
		<div class="cuerpo-modal  col-xs-11 col-lg-9 pg-lg-2 pg-xs-1">
			<div class="row">
				<i class="fa fa-times" id="quitar-ventana-modificar"></i>
				<div class="titulo-cuerpo">
					<h2>Modificar Alumno</h2>
					<div class="greca-cuerpo"></div>
				</div>
				<form action="##" class="col-xs-12" id="formDos">
					<div class="row ">
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-xs-1">
						<label>ID</label>
						<input  type="text" name="" disabled="false" id="idM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small>Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label>Nombre</label>
						<input  type="text" name="" id="nombreM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small>Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Apellido Paterno</label>
						<input  type="text" name="" id="apellidoPaternoM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small >Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Apellido Materno</label>
						<input  type="text" name="" id="apellidoMaternoM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small >Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Correo</label>
						<input  type="text" name="" id="correoM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small >Error massage</small>
						</div>
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Motivo</label>
						<input  type="text" name="" id="motivoM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small >Error massage</small>
						</div>
						
						<div class="form-control col-xs-12 col-sm-6 col-lg-4 pr-sm-1 pl-sm-1 mt-sm-1">
						<label >Teléfono</label>
						<input  type="number"  name="" id="telefonoM">	
						<i class="fas fa-check-circle"></i>
                		<i class="fas fa-exclamation-circle"></i>
						<small >Error massage</small>
						</div>
						
					</div>
					<input type="submit" name="" class="btn-form mt-xs-1" value="Guardar Cambios">
				</form>
			</div>
		</div>
	</div>
	<!---aqui termina-->

	<!--ventanana modal aceptacion eleminar-->
	<div class="ventana-modal animate__animated" id="ventana-modal-aceptacion">
		<div class="cuerpo-modal-eliminacion col-xs-10 col-sm-8 col-md-5 col-lg-4 ">
			<div class="row">
				<div class="co pg-xs-1 col-xs-12 row center-xs middle-xs">
					<div>
						<img src="../imagenes/information.png" class="mb-xs-2">
						<p class="texto-azul mb-xs-1">¿Estas Seguro?</p>
						<p class="texto-negro mb-xs-2 frase">No podrás recuperar los datos.</p>
						<span class="btn-aceptar   mr-xs-1" id="btn-aceptar"  >Aceptar</span>
						<span  class="btn-cancelar" id="quitar-ventana-aceptacion">Cancelar</span>	
						<b  id="idborrar"  style="display : none"  ></b>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--aqui terminar ventanana modal aceptacion eliminar -->

	<!--aqui empieza modal de dialog-->
		<div class="ventana-modal-dialog animate__animated" id="ventana-dialog">
			<div class="cuerpo-modal-dialog col-lg-3 pg-xs-1 pg-lg-2">
			 	<div class="row center-xs middle-xs">
			 		<div class="cont-dialog">
			 			<img src="../imagenes/checked.png" id="img-dialog">
			 			<h3 class="mt-xs-1 texto-blanco" id="texto-dialog">Se a guardado el registro</h3>
			 		</div>
			 	</div>
			</div>
		</div>
	<!--aqui termina modal de dialog-->

	<div class="contenedor-general">
		<div class="row altura">
			<div class="menu" id="menu-contenedor">
				<div class="row center-xs ">
					<i class="fas fa-times ico-quitar-tablet" id="ico-quitar-tablet"></i>
					
					<div class="perfil col-xs-7 col-md-9 col-lg-8">
						<img src="../imagenes/admin.png">		
						<h3 class="mt-xs-1 texto-blanco"><?php echo "$Nombre_ad"; ?></h3>
						
						<h4 class="texto-blanco">Administrador</h4>
					</div>
					<a href="../DatosGenerales/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 datos-generales" src="../imagenes/icono-menu-datosgeneral.svg">
						<h3 class="texto-blanco">Datos Generales</h3>
					</a>
					<a href="index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 empleados" src="../imagenes/icono-menu-empleado-azul.svg">
						<h3 class="texto-claro">Empleados</h3>
					</a>
					<a href="../PuntoVenta/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 punto" src="../imagenes/icono-menu-punto.svg">
						<h3 class="texto-blanco">Punto de Venta</h3>
					</a>
					<a href="../SubpuntoAdmin/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 punto" src="../imagenes/icono-menu-punto.svg">
						<h3 class="texto-blanco">Subpunto de Venta</h3>
					</a>
					<a  class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1" id="CPC">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 producto" src="../imagenes/icono-menu-producto.svg">
						<h3 class="texto-blanco">Cuentas Compartidas</h3>
					</a>
					<div class="col-xs-12 contenedor-submenu row" id="CCC">
						<a href="../ProductoCompartido/index.php?categoria=Netflix" class="col-xs-12 submenu">Netflix</a>
						<a href="../ProductoCompartido/index.php?categoria=Blim" class="col-xs-12 submenu">Blim</a>
						<a href="../ProductoCompartido/index.php?categoria=Amazon prime video" class="col-xs-12 submenu">Amazon prime video</a>
						<a href="../ProductoCompartido/index.php?categoria=Claro video" class="col-xs-12 submenu">Claro video</a>
						<a href="../ProductoCompartido/index.php?categoria=Claro music" class="col-xs-12 submenu">Claro music</a>
						<a href="../ProductoCompartido/index.php?categoria=Amazon Music" class="col-xs-12 submenu">Amazon Music</a>
						<a href="../ProductoCompartido/index.php?categoria=Paramount" class="col-xs-12 submenu">Paramount</a>
						<a href="../ProductoCompartido/index.php?categoria=Crunchyroll" class="col-xs-12 submenu">Crunchyroll</a>
						<a href="../ProductoCompartido/index.php?categoria=Starz play" class="col-xs-12 submenu">Starz play</a>
						<a href="../ProductoCompartido/index.php?categoria=Disney" class="col-xs-12 submenu">Disney</a>
						<a href="../ProductoCompartido/index.php?categoria=Play pass" class="col-xs-12 submenu">Play pass</a>
						<a href="../ProductoCompartido/index.php?categoria=HBO go" class="col-xs-12 submenu">HBO go</a>
						<a href="../ProductoCompartido/index.php?categoria=Youtube" class="col-xs-12 submenu">Youtube</a>
						<a href="../ProductoCompartido/index.php?categoria=Viki doramas" class="col-xs-12 submenu">Viki doramas</a>
						<a href="../ProductoCompartido/index.php?categoria=Fox sports" class="col-xs-12 submenu">Fox sports</a>
						<a href="../ProductoCompartido/index.php?categoria=HBO max" class="col-xs-12 submenu">HBO max</a>
						<a href="../ProductoCompartido/index.php?categoria=Discovery channel" class="col-xs-12 submenu">Discovery channel</a>
						<a href="../ProductoCompartido/index.php?categoria=Fun animation" class="col-xs-12 submenu">Fun animation</a>
						
						<a href="../ProductoCompartido/index.php?categoria=Todos" class="col-xs-12 submenu">Todos</a>
					</div>
					<a  class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1" id="UPC">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 producto" src="../imagenes/icono-menu-producto.svg">
						<h3 class="texto-blanco">Cuentas Individuales</h3>
					</a>
					<div class="col-xs-12 contenedor-submenu row" id="UCC">
						<a href="../ProductoUnico/index.php?categoria=Netflix" class="col-xs-12 submenu">Netflix</a>
						<a href="../ProductoUnico/index.php?categoria=Blim" class="col-xs-12 submenu">Blim</a>
						<a href="../ProductoUnico/index.php?categoria=Amazon prime video" class="col-xs-12 submenu">Amazon prime video</a>
						<a href="../ProductoUnico/index.php?categoria=Claro video" class="col-xs-12 submenu">Claro video</a>
						<a href="../ProductoUnico/index.php?categoria=Claro music" class="col-xs-12 submenu">Claro music</a>
						<a href="../ProductoUnico/index.php?categoria=Amazon Music" class="col-xs-12 submenu">Amazon Music</a>
						<a href="../ProductoUnico/index.php?categoria=Paramount" class="col-xs-12 submenu">Paramount</a>
						<a href="../ProductoUnico/index.php?categoria=Crunchyroll" class="col-xs-12 submenu">Crunchyroll</a>
						<a href="../ProductoUnico/index.php?categoria=Starz play" class="col-xs-12 submenu">Starz play</a>
						<a href="../ProductoUnico/index.php?categoria=Disney" class="col-xs-12 submenu">Disney</a>
						<a href="../ProductoUnico/index.php?categoria=Play pass" class="col-xs-12 submenu">Play pass</a>
						<a href="../ProductoUnico/index.php?categoria=HBO go" class="col-xs-12 submenu">HBO go</a>
						<a href="../ProductoUnico/index.php?categoria=Youtube" class="col-xs-12 submenu">Youtube</a>
						<a href="../ProductoUnico/index.php?categoria=Viki doramas" class="col-xs-12 submenu">Viki doramas</a>
						<a href="../ProductoUnico/index.php?categoria=Fox sports" class="col-xs-12 submenu">Fox sports</a>
						<a href="../ProductoUnico/index.php?categoria=HBO max" class="col-xs-12 submenu">HBO max</a>
						<a href="../ProductoUnico/index.php?categoria=Discovery channel" class="col-xs-12 submenu">Discovery channel</a>
						<a href="../ProductoUnico/index.php?categoria=Fun animation" class="col-xs-12 submenu">Fun animation</a>
						<a href="../ProductoUnico/index.php?categoria=Spotify" class="col-xs-12 submenu">Spotify</a>
						<a href="../ProductoUnico/index.php?categoria=Todos" class="col-xs-12 submenu">Todos</a>
					</div>
					<a href="../PromocionesAdmin/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 promo" src="../imagenes/icono-menu-promo.svg">
						<h3 class="texto-blanco">Promociones</h3>
					</a>
					<a href="../ticketAdmin/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1 row center-xs">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 ticket" src="../imagenes/icono-menu-ticket.svg">
						<span class="texto-blanco conta col-xs-12" id="contadorTicket"></span>
						<h3 class="texto-blanco">Reporte de Depósito</h3>
					</a>
					<a href="../Cliente/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 cliente" src="../imagenes/icono-menu-clientes.svg">
						<h3 class="texto-blanco">Clientes</h3>
					</a>
					<a href="../Ventas/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1 row center-xs">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 ventas" src="../imagenes/icono-menu-ventas.svg">
						<span class="texto-blanco conta col-xs-12" id="contadorVentas"></span>
						<h3 class="texto-blanco">Ventas</h3>
					</a>
					<a href="../Banner/index.php" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 banner" src="../imagenes/icono-menu-banner.svg">
						<h3 class="texto-blanco">Banner</h3>
					</a>
				</div>
			</div>
			<div class="contenido" id="contenido-contenedor">
				<div class="row mb-xl-2">
					<div class="hea row col-xs-12 col-lg-12 middle-xs between-xs pg-xs-1">
						<i class="fas fa-align-left ml-md-1 ml-lg-2 first-md" id="menu"></i>
						<form class="row center-xs col-xs-12 col-md-6 col-lg-6 first-md last-xs">
							<div class="col-xs-12 col-sm-7 col-md-9 col-lg-12">
								<img src="../imagenes/loupe.png">
								<input type="search" class="col-xs-12" name="" placeholder="Busca"  
								id="search">	
							</div>
						</form>
						<div class="menu-perfil mr-lg-2 mr-md-1">
							<div class="elemento-perfil row middle-xs">
								<div class="">
									<a href="../EditarPerfil/index.php"><i class="far fa-user"></i> Editar Perfil</a>
								</div>
								
								<div>
									<a href="index.php?cerrar=1"><i class="fas fa-door-open ml-xs-1"></i> Salir</a>
								</div>
								
							</div>
							<div id="contenedor-audio" style="position:fixed; top:-200%;">	
							</div>
						</div>
					</div>
					<div class="cuerpo col-lg-11 col-xs-12 pg-xs-1">
						<div class="titulo-cuerpo pg-xs-1 pg-lg-2">
							<h2>Alumnos</h2>
							<div class="greca-cuerpo"></div>
						</div>
						<div class="contenedor-cuerpo col-lg-12 ml-lg-2  pg-lg-2 pg-xs-1">
							<div class="cabeza-cuerpo row between-xs pg-sm-1">
								<div class="cantidad row middle-xs">
									<h4>Cantidad</h4>
									<form>
										<select name="combo" id="filtro" >
    										<!-- Opciones de la lista -->
    										<option value="5" selected="">5</option>
    										<option value="10">10</option> <!-- Opción por defecto -->
    										<option value="15">15</option>
    										<option value="20">25</option>
    										<option value="25">25</option>
  										</select>
									</form>
									<h3 id="et" style="display: none;"></h3>
								</div>
								<span  id="abrirVentanaAgregar">Agregar</span>
							</div>
							<div class="cuerpo-cuerpo  col-lg-12 mt-xs-1">
								 <div class="tabla-responsiva  col-lg-12">
								 	<div class="table-header"><img src="../imagenes/filtrador.png">ID </div>
									<div class="table-header"><img src="../imagenes/filtrador.png">CORREO</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">NOMBRE</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">APELLIDO PATERNO</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">APELLIDO MATERNO</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">MOTIVO</div>
									
									<div class="table-header"><img src="../imagenes/filtrador.png">TELEFONO</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">MODIFICAR</div>
									<div class="table-header"><img src="../imagenes/filtrador.png">ELIMINAR</div>
								 </div>
								 <div id="taks" class="tabla-responsiva  col-lg-12">

								 </div>
								 <div class="pie-cuerpo row center-xs col-lg-12 pg-sm-1 pg-lg-2">
								 	<div class="paginacion row middle-xs center-xs col-xs-12" id="task2">
								 <?php 
								 	include('conexion.php');
									$consulta1 = "SELECT * FROM alumno ";
									$resultado = pg_query($miconexion,$consulta1);
								 	$cantidad_resultados_por_pagina = 5;
									$total_registros = pg_num_rows($resultado);
									$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina);
									?>
									<?php for ($x = 1; $x <= $total_paginas; $x++) { ?>
            						
               						 <a class="numb pagina_click" Num_pag="<?php echo $x ?>">
                    				<?php echo $x ?></a>
            						
       								 <?php } ?>
       								
								  </div>
								 </div>

							</div>
							
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../scri/menudes.js"></script>
	<script src="../scri/ventanaModal.js"></script>	
	<script src="../scri/empleado.js"></script>
	<script src="../scri/view.js"></script>
	
	
</body>
</html>