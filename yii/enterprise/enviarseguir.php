<?php
include 'conexion3.php';

mysqli_query($conexion,"insert into seguir_empleo(id_cargo_vacante,cedula) values 
                       ('$_REQUEST[vacante]','$_REQUEST[cedula]')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Enviada con exito.";
header('Location: index.php');
?>
