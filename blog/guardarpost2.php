<?php

    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'primerai_root';
        $Password = 'Mormon2012';
        $dbName = 'primerai_blog';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        include 'conexion3.php';
        $registros=mysqli_query($conexion,"select * from post_img where id_post='$_REQUEST[id]'") or
              die("Problemas en el select:".mysqli_error($conexion));
            
            if ($reg=mysqli_fetch_array($registros))
            {
                mysqli_query($conexion, "update post_img set imagenes='$imgContenido' where id_post='$_REQUEST[id]'") or
                            die("Problemas en el select:".mysqli_error($conexion));
                            echo 'Imagen Actualizada';
            }
            else
            {
                             //Insertar imagen en la base de datos
                    $insertar = $db->query("INSERT into post_img (imagenes, creado, id_post) VALUES ('$imgContenido', now(), '$_REQUEST[id]')");
            		// COndicional para verificar la subida del fichero
                    if($insertar){
                        echo "Archivo Subido Correctamente.";
                    }else{
                            
                    } 
            }
                
       
		// Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
?>