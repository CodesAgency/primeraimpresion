<?php
include 'conexion3.php';
/* @var $this SiteController */

echo $id=yii::app()->user->getState("id");      

echo $id=yii::app()->user->getState("id");
echo $id=yii::app()->user->getState("id");


?>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .img{
            opacity: 0.2;
        }
        #banner{
            width: 100%;
            height: 200px;
            background-image: url('images/branding.jpg');
            border-radius: 10px 10px 0px 0px;
            background-size: 100% auto;
        }
        #coments{
            width: 70%;
            height: auto;
            background-color: rgba(255, 239, 175, 0.5);
            padding: 15px;
            border-radius: 10px;
        }
        #commentHistory{
            font-size: 15pt;
            font-weight: bold;
            float: right;
        }
        .paragraph{
            text-align: justify;
        }
    </style>
</head>
<body>
<div class="container-fluid">
	<?php
	$registros=mysqli_query($conexion,"select * from post where id='$_REQUEST[id]'") or
   die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
	?>
	<div class="container mt-4" id="contenido">
            <?php echo 'Banner'; ?>
            <section class="container mt-4 mb-4">
                <h2><strong><?php 'Titulo' ?></strong></h2>
                <h5><?php echo 'sub-titulo'?></h5>
                <div class="paragraph">
                    <button class="btn btn-warning" id="commentHistory">
                        Comentar Historia
                    </button>
                </div>
            </section>
            <section class="container-fluid mt-4 mb-4 p-4">
                <?php
                    echo 'comentario';
                ?>
                <div id="request"></div>
            </section>
    </div>
	<?php

}
else
{

	?>
	<div class="container mt-4" id="contenido">
            <?php require_once('banner.php') ?>
            <section class="container mt-4 mb-4">
                <figure>
                    <img src="../images/hombre_write.png" alt="">
                </figure>
                <h2>            
                </h2>
                <h5>
                <?php
                    require_once('subtitle.php')
                ?>
                </h5>
                <div class="paragraph">
                    <button class="btn btn-warning" id="commentHistory">
                        Comentar Historia
                    </button>
                </div>
            </section>
            <section class="container-fluid mt-4 mb-4 p-4">
                <?php
                    require_once('publicComent.php');
                ?>
                <div id="request">
            </div>
           </section>            
    </div>
	<?php
        }
	?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>