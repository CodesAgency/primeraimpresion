<?php

include("conexion3.php");


$registros=mysqli_query($conexion,"Select * from post order by id DESC LIMIT 1") or
  die("Problemas en el select:".mysqli_error($conexion));


$descripcion_breve = $_REQUEST['descripcion_breve'];

$contenido = $_REQUEST['txt-contentent'];

$videoUrl = $_REQUEST['video'];
$status = $_REQUEST['status'];
$categoria_id = $_REQUEST['categoria_id'];
$users_id = $_REQUEST['users_id'];

if (isset($_REQUEST['titulo'])) 
	{
        $titulo = $_REQUEST['titulo'];
	}else
		{
		$titulo='';
		}

                
if ($reg=mysqli_fetch_array($registros))
{
    
  $id=$reg['id']+1;
}
else
{
  $id=1;  
}
//echo $id;

mysqli_query($conexion,"INSERT INTO post(id, titulo, descripcion_breve, contenido, localimg, videoUrl,status, categoria_id, users_id) VALUES ('$id', '$titulo', '$descripcion_breve', '$contenido', '$id', '$videoUrl', '$status', '$categoria_id', '$users_id')")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

					
					
?>

<?php
include 'conexion3.php';
$categoria=mysqli_query($conexion,"select * from categoria") or
  die("Problemas en el select:".mysqli_error($conexion));
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('#txt-content').Editor();

			$('#txt-content').Editor('setText', ['<p style="color:red;">Hola</p>']);

			$('#btn-enviar').click(function(e){
				e.preventDefault();
				$('#txt-content').text($('#txt-content').Editor('getText'));
				$('#frm-test').submit();				
			});
		});	
	</script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">  
                <form action="guardarpost2.php" method="post" id="frm-test" enctype="multipart/form-data">                   
                    
                    <h2>Anexar Banner</h2>
                    <input type="file" class="form-control" id="image" required name="image" multiple>
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" class="btn btn-default" id="btn-enviar" value="Mostrar Resultado">
                </form>
                        <script>
                            let file = document.getElementById('file');
                        </script> 
        </div>
    </div>

</body>

</html>