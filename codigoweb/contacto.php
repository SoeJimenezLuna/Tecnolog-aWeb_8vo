<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacto</title>

	<link rel="stylesheet" type="text/css" href="css/rejilla.css">
	<link rel="stylesheet" type="text/css" href="css/animaciones.css">
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	
	<link rel="shortcut icon"  href="imagenes/logo.ico">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">


	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<script src="script/jquery-3.2.1.js"></script>

	<script src="script/wow.min.js"></script>
	<script src="script/wow.js"></script>
	  <script>
    wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       150,          // default
                      mobile:       true,       // default
                      live:         false        // default
                    }
                    )
                    wow.init();
    </script>
</head>
<body>
	<!--<div class="modal row middle-xs center-xs animate__animated" id="ventana-dialog">
			<div class="">
				<i class="fa-solid fa-envelope-open-text"></i>
				<h2 class="txt-amarillo">¡Mensaje Enviado!</h2>	
			</div>
			
	</div>-->
	<div class="cont-general">
		<header>
				<div class="row menu middle-xs between-xs pg-xs-1 pl-lg-3 pr-lg-3 pl-md-2 pr-md-2" >
						<div class="cont-logo rel">
						<img src="imagenes/logo.png" class="logo-img">
						</div>
						<i class="fas fa-bars" id="main"></i>	
					<nav class="col-lg-10 end-xs">
						<ul class="uu" >
							<li><a href="index.php" class="act" >Inicio</a></li>
							<li><a href="contacto.php">Registro</a></li>
							<li class="submenu">
							<a  class="cat" id="ico-gi">Temario <i class="fa-solid fa-chevron-down"></i></a>
							<ul class="children">
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Boda" class="">Boda</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Bautizo" class="">Bautizo</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Pedida de mano" class="">Pedida de mano</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Despedida de soltera" class="">Despedida de soltera</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Revelacion de sexo" class="">Revelación de sexo</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Bienvenida" class="">Bienvenida</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Cumpleaños" class="">Cumpleaños</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Cumpleaños infantil" class="">Cumpleaños infantil</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Graduacion" class="">Graduación</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Globos de helio" class="">Globos de helio</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Bouquets" class="">Bouquets</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Centro de mesa" class="">Centros de mesa</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=San Valentin" class="">San Valentín</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Aniversarios de amor" class="">Aniversarios de amor</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Aniversario empresarial" class="">Aniversario empresarial</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Inaguracion de empresa" class="">Inaguración empresarial</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Navidad" class="">Navidad</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Halloween" class="">Halloween</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=XV años" class="">XV años</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Baby shower" class="">Baby Shower</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Decoracion de restaurantes" class="">Decoración de restaurantes</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Decoracion de casa" class="">Decoración de casa</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Back de fotos" class="">Back de fotos</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Año nuevo" class="">Año nuevo</a></li>
							<li><i class="fa-solid fa-gifts"></i><a href="catalogo?categoria=Mesa de dulces y postres" class="">Mesa de dulces y postres</a></li>
							</ul>
						</li>
							
						</ul>
					</nav>
				</div>
			</header>
		<article>
			<div class="row formu pt-xs-1 pt-lg-2 pb-xs-1 pb-lg-2 pl-lg-3 pr-lg-3 pl-md-2 pr-md-2 pl-xs-1 pr-xs-1">
				<div class="col-lg-6 col-xs-12 pr-lg-1 wow bounceInDown" data-wow-duration="1.5s">
					<h5 class="tit-contacto texto-azul-claro">Contacto</h5>
					<form class="rel col-xs-12 form-contacto" id="form" action="Alumno/subirEmpleado.php" method="post">
						<input type="number" name="IdE" required placeholder="ID" class="mt-xs-1" id="IdE">
						<input type="text" name="NombreE" required placeholder="Nombre" class="mt-xs-1" id="NombreE">
						<input type="text" name="Apellido_PaE" required placeholder="Apellido Paterno" class="mt-xs-1" id="Apellido_PaE">
						<input type="text" name="Apellido_MaE" required placeholder="Apellido Materno" class="mt-xs-1" id="Apellido_MaE">
						<input type="number" name="Num_telE" required placeholder="Telefono" class="mt-xs-1" id="Num_telE">
						<textarea placeholder="Motivo" required class="mt-xs-1" name="MotivoE" id="MotivoE"></textarea>
						<input type="email" name="CorreoE" required placeholder="Email" class="mt-xs-1" id="CorreoE">
						<button class="mt-xs-1 txt-blanco btn-amarillo" onclick="$siesta">Enviar</button>
					</form>
				</div>
				<div class="img-contacto col-lg-6 col-xs-12 row center-xs">
					<img src="imagenes/form.svg" class="wow bounceInDown" data-wow-duration="1.5s" data-wow-delay=".5s">
				</div>
			</div>
			
		</article>
		
		<footer>
				<div class="row center-xs middle-xs foo pt-xs-1 pt-lg-2 pb-xs-1 pb-lg-2 pl-lg-3 pr-lg-3 pl-md-2 pr-md-2 pl-xs-1 pr-xs-1">
							<img src="imagenes/logo.jpg" class="logo-footer">
							<div class="redes-footer mt-xs-1">
									<a href="https://www.facebook.com/victoria.partylandia" class="txt-blanco"><i class="fab fa-facebook-f"></i></a>
									<a href="https://instagram.com/party.landia?utm_medium=copy_link" class="txt-blanco"><i class="fab fa-instagram"></i></a>
									<a href="https://api.whatsapp.com/send?phone=529671806586&text=Requiero%20consultar%20un%20proyecto" target=”_blank” class="txt-blanco"><i class="fab fa-whatsapp"></i></a>
							</div>
							<div class="derechos">
								
								<p class="txt-blanco mt-xs-1"><i class="far fa-copyright txt-blanco"></i>Party Landia todos los derechos reservados.</p>
								<p class="txt-blanco mt-xs-1">Desarrollado por <a href="https://www.softwaresean.com/"  target=”_blank” class="txt-blanco">SoftwareSEAN</a></p>
							</div>
				</div>	
			</footer>
	</div>

<script src="script/menuDespegar.js"></script>
<script src="https://kit.fontawesome.com/1ad0f4c491.js" crossorigin="anonymous"></script>
<script src="script/mapin.js"></script>
<script src="script/mail.js"></script>
	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYxUHn9A9V6iBEOpOvzFw9WXfnEGjbxQ&callback=myMap">
    </script>
</body>
</html>