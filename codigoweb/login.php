<?php 
include('conexion_dos.php');
if(!$miconexion)
echo "Error con la BD";
date_default_timezone_set("America/Mexico_City");
session_start();
	
    




if (isset($_REQUEST['Correo']) && !empty($_REQUEST['Correo'])) {
$password = $_REQUEST['password'];
$Correo= $_REQUEST['Correo'];
$siesta=pg_num_rows(pg_query($miconexion,"SELECT * FROM usuario WHERE correo='$Correo' AND password='$password'  "));

  if ($siesta == true) {
    $_SESSION['user']=$Correo;
      header("Location:Alumno/");
  }else{
    echo"<script> alert('Usuario o contraseña incorrecto') </script> ";
   }
  
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/rejilla.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	
	<title>Login Tecnosite</title>
</head>
<body>
	<div class="contenedor-login">
		<div class="segundo-contenedor">
			<div class="row altura middle-xs center-xs pl-md-2 pr-md-2">
			<div class="lado-izq col-xs-12 col-md-8 col-lg-5 pg-lg-2 qui-xs apa-lg ">
				<div class="row segunda-altura middle-xs center-xs">
					<div class="logo-img col-xs-6 titulo ">
					<img src="imagenes/logo.png">
					</div>

					<div class="logo-img col-xs-12">
					<img src="imagenes/passlogin.svg">
					</div>
				</div>

			</div>
			<div class="lado-der  col-xs-11 col-sm-9 col-md-8 col-lg-5 ">
				<div class="row segunda-altura middle-xs center-xs">
					<div class="titulo col-xs-10 pt-xs-1 pb-xs-1">
						<div class="row center-xs mb-lg-3">
							<div class="logo-img col-xs-6 qui-lg apa-xs">
							<img src="imagenes/user.svg">
							</div>
							<h3 class="titulo-texto col-xs-12 mt-xs-3">Bienvenido</h3>
							<div class="greca"></div>
						</div>
						
						<form id="form" class="col-xs-12 mt-lg-3 form" action="">
						<div class="row center-xs">
							<div class="form-control row col-xs-12 col-sm-10  mt-xs-1">
							<input type="text" name="Correo" class="col-xs-12" placeholder="Ingresa tu correo" id="email">
							<i class="fas fa-check-circle"></i>
                			<i class="fas fa-exclamation-circle"></i>
							<small class="">Error massage</small>	
							</div>
							<div class="form-control row col-xs-12 col-sm-10  mt-xs-1">
							<input type="password" name="password" class="col-xs-12" placeholder="Ingresa tu contraseña" id="password">
							<i class="fas fa-eye lo-m"></i>
							<i class="fas fa-check-circle"></i>
                			<i class="fas fa-exclamation-circle"></i>
							<small class="">Error massage</small>	
							</div>
							<button class="col-xs-12 col-sm-10 mt-xs-2">Iniciar Sesión</button>
						</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		</div>
	</div>
	<script src="scri/validacionLogin.js"></script>
	<script src="scri/view.js"></script>
</body>
</html>
