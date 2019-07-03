<?php
    include("conexion.php");
    	$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $id_aspirante=$_REQUEST['id'];
        
    mysqli_query($conexion, "update cuestionario
                          set imagen='$imagen' 
                        where id_cuestionario='$id'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "modificado";
             
    
   
    
    
?>