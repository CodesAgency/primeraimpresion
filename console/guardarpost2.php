<?php

$id=$_REQUEST['id'];
        
// crear directorio
if (isset($_POST["imagen"])) 
	{
        echo 'si hay imagen';
	}else
		{
		echo 'no hay imagen';
		}
					
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

        <script type="text/javascript">
parent.location.href = "index.php?r=site/history&id=<?php echo $id;?>";
</script>