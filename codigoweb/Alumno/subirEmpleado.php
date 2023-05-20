<?php 
include('conexion.php');

if(!empty($_POST['NombreE']) && !empty($_POST['Apellido_PaE']) && !empty($_POST['Apellido_MaE']) && !empty($_POST['CorreoE']) && !empty($_POST['MotivoE']) && !empty($_POST['Num_telE']) ){
$id = $_POST['IdE'];
$nombre = $_POST['NombreE'];
$apellido_pa = $_POST['Apellido_PaE'];
$apellido_ma = $_POST['Apellido_MaE'];
$correo = $_POST['CorreoE'];
$motivo = $_POST['MotivoE'];
$num_tel = $_POST['Num_telE'];

$consulta = "INSERT INTO alumno (id_alumno, nombre, apellido_paterno,apellido_materno,telefono,motivo,email) VALUES ('".$id."','".$nombre."','".$apellido_pa."','".$apellido_ma."','".$num_tel."','".$motivo."','".$correo."')";
$resultado = pg_query($miconexion,$consulta);

if (!$resultado) {
	die('Fallo la consulta');
}
echo "Agregado Correctamente";

}

 ?>
