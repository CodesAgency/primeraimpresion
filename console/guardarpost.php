<?php

include("conexion3.php");


$registros=mysqli_query($conexion,"Select * from post order by id DESC LIMIT 1") or
  die("Problemas en el select:".mysqli_error($conexion));

$titulo = $_REQUEST['titulo'];
$descripcion_breve = $_REQUEST['descripcion_breve'];
$contenido = htmlentities($_REQUEST['txt-content']);
echo $_REQUEST['txt-content'].$contenido;
$videoUrl = $_REQUEST['video'];
$status = $_REQUEST['status'];
$categoria_id = $_REQUEST['categoria_id'];
$users_id = $_REQUEST['users_id'];

if ($reg=mysqli_fetch_array($registros))
{
  $id=$reg['id']+1;
}
echo $id;

mysqli_query($conexion,"INSERT INTO post(id, titulo, descripcion_breve, contenido, localimg, videoUrl,status, categoria_id, users_id) VALUES ('$id', '$titulo', '$descripcion_breve', '$contenido', '$id', '$videoUrl', '$status', '$categoria_id', '$users_id')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

// crear directorio

					
					$Rando=$id;
					$carpeta = './img/'.$Rando."/";
					echo $carpeta;
						if (!file_exists($carpeta)) {
							mkdir($carpeta, 0777, true);
							
						}
						
$nombre = $_FILES['imagen']['name'];
$nombrer = strtolower($nombre);
$cd=$_FILES['imagen']['tmp_name'];
$ruta = "img/" .$Rando."/". $_FILES['imagen']['name'];
$destino = "img/".$nombrer;
$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

					
					echo "Destino:".$destino."<br/>";
					echo "CD:".$cd."<br/>";
					echo "Nombre:".$nombre."<br/>";
					echo "Nombrer:".$nombrer."<br/>";
					
					
?>