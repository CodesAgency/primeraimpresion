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
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        
        #contHistories {
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }
        
        #menublogLateral {
            width: 320px;
        }
    </style>
</head>
           
<body>
    <?php 
    
    $registros=mysqli_query($conexion,"SELECT * from`post") or
  die("Problemas en el select:".mysqli_error($conexion));

while ($reg=mysqli_fetch_array($registros))
{
   ?>
<div class="container-fluid" id="contHistories">
        <div id="histories">
            <div id="noteBlog3" class="notes  mr-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $reg['id'];?>/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $reg['titulo']; ?></h5>
                        <p class="card-text"><?php  echo $reg['descripcion_breve']; ?></p>
                        <a href="index.php?r=site/history&id=<?php echo $reg['id']; ?>" class="btn btn-primary">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <?php
   
}
    
    ?>
    
</body>
</html>
