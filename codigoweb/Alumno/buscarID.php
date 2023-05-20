<?php 
include ('conexion.php');
if(!$miconexion)
echo "Error con la BD";
	

	$id = $_POST['idEmpleado'];
	
	
	$siesta=pg_num_rows(mysqli_query($miconexion,"SELECT * FROM alumno WHERE id_alumno='$id' "));

	
	if($siesta == true){
		$sqlDelete = "SELECT * FROM alumno WHERE id_alumno='$id'";
		$res = pg_query($miconexion,$sqlDelete);
		if (!$res) {
		die('Failed');
		}
		$json = array();
		while($row = pg_fetch_array($res)){
		$json[] = array(
			'Id' => $row['id_alumno'],
		);
		}
		$jsonstring = json_encode($json[0]);
		echo $jsonstring;

	}else{	
		$json = array();
		
		$json[] = array(
			'Id' => '0',
		);
		
		$jsonstring = json_encode($json[0]);
		echo $jsonstring;
	}

	
	
	




 ?>