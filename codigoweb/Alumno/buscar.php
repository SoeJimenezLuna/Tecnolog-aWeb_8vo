<?php

include ( 'conexion.php' );

$search = $_POST ['search'];
if (!empty($search)) {
  $consulta = "SELECT * FROM alumno WHERE id_alumno LIKE '$search%' OR nombre LIKE '$search%' OR apellido_paterno LIKE '$search%' OR apellido_materno LIKE '$search%' OR telefono LIKE '$search%'  OR motivo LIKE '$search%' OR email LIKE '$search%' "  ;
  $resultado = pg_query ($miconexion,$consulta );

  if (! $resultado ) {
    die ( 'Error de consulta'.pg_error($miconexion));
  }
  
  $json = array();
  while ($row = pg_fetch_array ($resultado)) {
    $json [] = array(
    'IdE' => $row['id_alumno'],
  
    'NombreE' => $row['nombre'],
    'Apellido_PaE' => $row['apellido_paterno'],
    'Apellido_MaE' => $row['apellido_materno'],
    'telefono' => $row['telefono'],
    'motivo' => $row['motivo'],
    'email' => $row['email']
  
    );
  }
  $jsonstring =json_encode($json);
  echo  $jsonstring ;
}

?>