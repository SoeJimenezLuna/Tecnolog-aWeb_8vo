<?php 
include('conexion.php');
$num_pag = 1;
$cantidad_resultados_por_pagina = 5;

if(!empty($_POST['fil'])){
	$cantidad_resultados_por_pagina = $_POST['fil'];
}

if(!empty($_POST['num'])){
	$num_pag = $_POST['num'];
}
$consulta = "SELECT * FROM alumno";
$resultado = pg_query($miconexion,$consulta);


$total_registros = pg_num_rows($resultado);

$json = $total_registros;

/*$jsonstring = json_encode($json);
echo $jsonstring; */
$jsonstring = json_encode($json);
	echo $jsonstring;
 ?>