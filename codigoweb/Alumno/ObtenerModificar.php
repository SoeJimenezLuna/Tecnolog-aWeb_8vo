<?php 
include ('conexion.php');
	$Id = $_POST['idedit'];
	
	$sqlDelete = "SELECT * FROM alumno WHERE id_alumno='$Id'";
	$res = pg_query($miconexion,$sqlDelete);
	

	if (!$res) {
		die('Failed');
	}
	
	$json = array();
	while($row = pg_fetch_array($res)){
		$json[] = array(
			'Id_e' => $row['id_alumno'],
		'Nombre' => $row['nombre'],
		'Apellido_Pa' => $row['apellido_paterno'],
		'Apellido_Ma' => $row['apellido_materno'],
		'telefono' => $row['telefono'],
		'motivo' => $row['motivo'],
		'email' => $row['email']
		);
	}
	$jsonstring = json_encode($json[0]);
	echo $jsonstring;
	




 ?>