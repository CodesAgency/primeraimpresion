<?php
include 'conexion3.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>
        #formSubcirb {
            width: 300px;
        }
        #paragraphFooter {
            color: whitesmoke;
        }
        .jumbotron {
            background-image: url(imagesBlog/orange.jpg);
            background-size: 100% 100%;
        }
        
        #buttonHistories {
            width: 50px;
            height: 50px;
            border-radius: 0px 7px 7px 0px;
            background-color: orangered;
        }
        #histories {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 2px 5px 11px rgba(10,10,10,0.8);
            border: solid 2px white;
            transition: ease all 0.3s;
            background-color: whitesmoke;
        }
        #histories:hover{
            border: solid 2px orangered;
            transition: ease all 0.3s; 
        }
        #contHistories {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
            margin-top: -150px;
        }
        #menublogLateral {
            width: 320px;
        }
        .historiesC{
            margin-top: 15px;
        }
    </style>
</head>
           
<body>
<div class="container-fluid" id="contHistories">
    <?php 
$registros=mysqli_query($conexion,"select * from post AS po INNER JOIN post_img AS pi ON po.id = pi.id_post") or
die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
   ?>
        <div id="histories" class="historiesC">
            <div id="noteBlog3" class="notes mr-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="data:image/gif;base64,<?php echo base64_encode($reg['imagenes']);?>" 
title="Título de la imágen" />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $reg['titulo']; ?></h5>
                        <p class="card-text"><?php  echo $reg['descripcion_breve']; ?></p>
                        <a href="index.php?r=site/history&id=<?php echo $reg['id']; ?>" class="btn btn-primary">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
 
    <?php
   
}
    
    ?>
</div>     
</body>
</html>
