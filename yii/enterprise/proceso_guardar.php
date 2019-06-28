<?php
    include("conexion.php");
    $pregunta = utf8_decode($_REQUEST['pregunta']);
    $respuesta1= utf8_decode($_REQUEST['respuesta1']);
	$respuesta2= utf8_decode($_REQUEST['respuesta2']);
	$respuesta3= utf8_decode($_REQUEST['respuesta3']);
	$respuesta4= utf8_decode($_REQUEST['respuesta4']);  
	$respuestacorrecta = utf8_decode($_REQUEST['respuesta_correcta']);
	$asignatura= utf8_decode($_REQUEST['asignatura']);
	$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        //numera por asignatura
        
        include 'conexion3.php';
                $registros=mysqli_query($conexion,"select MAX(n_pregunta)n_pregunta from cuestionario where asignatura='$asignatura'") or
                        die("Problemas en el select:".mysqli_error($conexion));

                        if ($reg=mysqli_fetch_array($registros))
                        {
                            $napregunta=$reg['n_pregunta']+1;
                        
        
        //
        
        
         $query = "INSERT INTO cuestionario(pregunta,respuesta_1,respuesta_2,respuesta_3,respuesta_4,respuesta_correcta,asignatura,imagen,n_pregunta) VALUES
		                                ('$pregunta','$respuesta1','$respuesta2','$respuesta3','$respuesta4','$respuestacorrecta','$asignatura','$imagen','$napregunta')";
    $resultado = $conexion->query($query);
    
    if($resultado){
        header("Location:insertar.php");
    }
    else {
    
    echo 'No se Inserto la informacion';    
    
    
    }
             
    }
   
    
    
?>