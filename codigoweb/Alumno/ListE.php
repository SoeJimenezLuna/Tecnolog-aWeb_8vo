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

$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina);

$inicial = (($num_pag - 1) * $cantidad_resultados_por_pagina);




$consulta1 = "SELECT * FROM alumno LIMIT  $cantidad_resultados_por_pagina OFFSET  $inicial";
$resultado1 = pg_query($miconexion,$consulta1);
if(!$resultado1){
	die('Failed'. pg_error($miconexion));
}


$json = array();
while($row = pg_fetch_array($resultado1)){
$json[] = array(
	'IdE' => $row['id_alumno'],
	'Ca' => $total_registros, 
		'NombreE' => $row['nombre'],
		'Apellido_PaE' => $row['apellido_paterno'],
		'Apellido_MaE' => $row['apellido_materno'],
		'telefono' => $row['telefono'],
		'motivo' => $row['motivo'],
		'email' => $row['email']
 );
}

/*$jsonstring = json_encode($json);
echo $jsonstring; */
$jsonstring = json_encode($json);
	echo $jsonstring;
 ?>