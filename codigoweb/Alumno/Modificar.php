<?php 
include('conexion.php');

$id = $_POST['IdEM'];
$nombre = $_POST['NombreEM'];
$apellido_pa = $_POST['Apellido_PaEM'];
$apellido_ma = $_POST['Apellido_MaEM'];
$correo = $_POST['CorreoEM'];
$motivo = $_POST['MotivoEM'];
$num_tel = $_POST['Num_telEM'];

$consulta = "UPDATE alumno SET nombre = '$nombre' , apellido_paterno = '$apellido_pa', apellido_materno = '$apellido_ma'   , motivo = '$motivo' , telefono = '$num_tel' WHERE id_alumno = $id";
$resultado = pg_query($miconexion,$consulta);
if (!$resultado) {
	die('failed');
}
 ?>