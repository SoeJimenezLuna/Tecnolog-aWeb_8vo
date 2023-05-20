<?php 
include('conexion.php');
if(!empty($_POST['id'])){
$id = $_POST['id'];
$query = "DELETE FROM alumno WHERE id_alumno='".$id."'";
$resultado = pg_query($miconexion,$query);

}






 ?>