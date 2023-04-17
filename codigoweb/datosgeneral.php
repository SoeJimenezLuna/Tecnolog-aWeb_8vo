<?php 

include('conexion_dos.php');

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
  header("Location:login.php");
}

 
 ?>
 <?php 
 	
 	

	


  ?>
 <!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/rejilla.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/generalMenu.css">
	
	
	<link rel="stylesheet" type="text/css" href="css/datos.css">

	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<title>Datos Generales</title>
	<link rel="shortcut icon"  href="imagenes/logo.ico">
	<script src="script/jquery-3.2.1.js"></script>
	<script src="script/menu.js"></script>
	<meta charset="utf-8">
</head>
<body class="body">







	<div class="contenedor-general">
		<div class="row altura">
			<div class="menu" id="menu-contenedor">
				<div class="row center-xs ">
					<i class="fas fa-times ico-quitar-tablet" id="ico-quitar-tablet"></i>
					<div class="logo col-xs-10 col-sm-8 col-lg-12 pg-xs-1">
						<img src="imagenes/logo.jpg">
					</div>
					<div class="perfil col-xs-7 col-md-9 col-lg-8">
						<img src="imagenes/admin.png">		
						<h3 class="mt-xs-1 txt-blanco">Victoria</h3>
						
						<h4 class="txt-blanco">Administrador</h4>
					</div>
					<a href="" class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 datos-generales" src="imagenes/icono-menu-datosgeneral-azul.svg">
						<h3 class="txt-amarillo">Datos Generales</h3>
					</a>
					<a  class="cont-menu col-xs-7 col-md-6 col-lg-10 pg-xs-1 mt-md-1" id="CPC">
						<img class="col-xs-8 col-sm-7 col-lg-8 col-xl-6 producto" src="imagenes/icono-menu-evento.svg">
						<h3 class="txt-blanco">Eventos</h3>
					</a>
					<div class="col-xs-12 contenedor-submenu row" id="CCC">
						<a href="eventos?categoria=Boda" class="col-xs-12 submenu">Boda</a>
						<a href="eventos?categoria=Bautizo" class="col-xs-12 submenu">Bautizo</a>
						<a href="eventos?categoria=Pedida de mano" class="col-xs-12 submenu">Pedida de mano</a>
						<a href="eventos?categoria=Despedida de soltera" class="col-xs-12 submenu">Despedida de soltera</a>
						<a href="eventos?categoria=Revelacion de sexo" class="col-xs-12 submenu">Revelación de sexo</a>
						<a href="eventos?categoria=Bienvenida" class="col-xs-12 submenu">Bienvenida</a>
						<a href="eventos?categoria=Cumpleaños" class="col-xs-12 submenu">Cumpleaños</a>
						<a href="eventos?categoria=Cumpleaños infantil" class="col-xs-12 submenu">Cumpleaños infantil</a>
						<a href="eventos?categoria=Graduacion" class="col-xs-12 submenu">Graduación</a>
						<a href="eventos?categoria=Globos de helio" class="col-xs-12 submenu">Globos de helio</a>
						<a href="eventos?categoria=Bouquets" class="col-xs-12 submenu">Bouquets</a>
						<a href="eventos?categoria=Centro de mesa" class="col-xs-12 submenu">Centro de mesa</a>
						<a href="eventos?categoria=San Valentin" class="col-xs-12 submenu">San Valentín</a>
						<a href="eventos?categoria=Aniversarios de amor" class="col-xs-12 submenu">Aniversarios de amor</a>
						<a href="eventos?categoria=Aniversario empresarial" class="col-xs-12 submenu">Aniversario empresarial</a>
						<a href="eventos?categoria=Inaguracion de empresa" class="col-xs-12 submenu">Inaguración de empresa</a>
						<a href="eventos?categoria=Navidad" class="col-xs-12 submenu">Navidad</a>
						<a href="eventos?categoria=Halloween" class="col-xs-12 submenu">Halloween</a>
						<a href="eventos?categoria=XV años" class="col-xs-12 submenu">XV años</a>
						<a href="eventos?categoria=Baby shower" class="col-xs-12 submenu">Baby shower</a>
						<a href="eventos?categoria=Decoracion de restaurantes" class="col-xs-12 submenu">Decoración de restaurantes</a>
						<a href="eventos?categoria=Decoracion de casa" class="col-xs-12 submenu">Decoración de casa</a>
						<a href="eventos?categoria=Back de fotos" class="col-xs-12 submenu">Back de fotos</a>
						<a href="eventos?categoria=Año nuevo" class="col-xs-12 submenu">Año nuevo</a>
						<a href="eventos?categoria=Mesa de dulces y postres" class="col-xs-12 submenu">Mesa de dulces y postres</a>
					</div>
					
				</div>
			</div>
			<div class="contenido" id="contenido-contenedor">
				<div class="row mb-xl-2">
					<div class="hea row col-xs-12 col-lg-12 middle-xs between-xs pg-xs-1">
						<i class="fas fa-align-left ml-md-1 ml-lg-2 first-md" id="menu"></i>
						
						<div class="menu-perfil mr-lg-2 mr-md-1">
							<div class="elemento-perfil row middle-xs">
								<div class="">
									<a href="editarperfil"><i class="far fa-user"></i> Editar Perfil</a>
								</div>
								
								<div>
									<a href="datosgeneral.php?cerrar=1"><i class="fas fa-door-open ml-xs-1"></i> Salir</a>
								</div>
								
							</div>
							
						</div>
					</div>
					<div class="cuerpo col-xs-12 pg-xs-1">
						<div class="titulo-cuerpo pg-xs-1 pg-lg-2">
							<h2>Datos Generales</h2>
							<div class="greca-cuerpo"></div>
						</div>
						<div class="row pg-md-1 center-xs" class="cont-datos">
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-ring"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numBoda">0</h3>
										<h4>Boda</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-baby"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numBautizo">0</h3>
										<h4>Bautizo</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-ring"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numPedida">0</h3>
										<h4>Pedida de mano</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-venus"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numDespedida">0</h3>
										<h4>Despedida de soltera</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-question"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numRevelacion">0</h3>
										<h4>Revelación del sexo</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-door-open"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numBienvenida">0</h3>
										<h4>Bienvenida</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-cake-candles"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numCumple">0</h3>
										<h4>Cumpleaños</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-child"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numCumpleInfa">0</h3>
										<h4>Cumpleaños infantil</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-graduation-cap"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numGraduacion">0</h3>
										<h4>Graduación</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-wind"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numGlobosHelio">0</h3>
										<h4>Globos de helio</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-fan"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numBouquets">0</h3>
										<h4>Bouquets</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-gift"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numCentroMesa">0</h3>
										<h4>Centro de mesa</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-heart"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numValentin">0</h3>
										<h4>San Valentín</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-heart"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numAniAmor">0</h3>
										<h4>Aniversario de amor</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-building"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numAniEmpresarial">0</h3>
										<h4>Aniversario de empresa</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-building"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numInaguracionEmpresarial">0</h3>
										<h4>Inaguración de empresa</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-candy-cane"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numNavidad">0</h3>
										<h4>Navidad</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-ghost"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numHalloween">0</h3>
										<h4>Halloween</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-ghost"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numHalloween">0</h3>
										<h4>Halloween</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-person-dress"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numXV">0</h3>
										<h4>XV Años</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-baby-carriage"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numBabyShower">0</h3>
										<h4>Baby shower</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-champagne-glasses"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numDecoRestaurante">0</h3>
										<h4>Decoración de restaurante</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-house"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numDecoCasa">0</h3>
										<h4>Decoración de casa</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>
							<div class="col-xs-10 col-sm-6 col-lg-4 pl-xs-1 pr-xs-1 contenedor-caja-blanca mb-lg-2 mb-xs-1">
								<div class="caja-blanca pg-xs-1">
									<i class="fa-solid fa-camera"></i>
									<div class="col-xs-12 mb-xs-2">
										<h3 id="numFotos">0</h3>
										<h4>Back de fotos</h4>
									</div>
									<img src="imagenes/wave-tarjeta.svg">
								</div>
							</div>


						</div>
						
	
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="script/menudes.js"></script>
	
	<script src="script/datosgeneral.js"></script>
	
	<script src="https://kit.fontawesome.com/1ad0f4c491.js" crossorigin="anonymous"></script>
</body>
</html>