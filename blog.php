<!DOCTYPE html>
<?php
        
        $title =[
            "1" => "¿Qué es el Branding?",
            "2" => "Tendencia de Diseño Gráfico 2019",
        ];
        $descrip =[
            "1" => "El branding, entiéndase abreviadamente como la <strong>gestión de las marcas,</strong> se ha convertido en uno de esos tópicos de los que muchos...",
            "2" => "Actualmente, se esta viendo la tendencia aún más fuerte de lo minimaliest haciendo eco a nuestra querida palabra celebre <strong>'Menos es más'</strong>",
        ];
        
        ?>
<html lang="es">

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos-blog/blog.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="js.css">
    <link rel="stylesheet" href="css-style-new/generalstyle.css">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Blog Primera Impresión</title>
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
    <div class="container-fluid">
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="images/logo-pi.png" width="100px" height="auto" alt="blog primera impresion"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Website <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./console/index.php?r=site/login">Iniciar Sesión</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="container mt-4">
        <div class="jumbotron jumbotron">
            <div class="container">
                <h2 class="display-5">Nuestras mejores Historias</h2>
                <p class="lead">Recibe semanalmente un boletín con un nuevo tip o historia... Suscríbete aquí
                    <form>
                        <div class="row">
                            <div class="col-5" id="formSubcirb">
                                <input type="email" placeholder="ingresa tu email" class="form-control p-4">
                                <input type="submit" value="suscribirse" class="btn btn-primary mt-2">
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <div id="historiesItems">
        <div id="buttonHistories">
            <img src="images/ico-menu.png" width="50px" height="50px" alt="">
        </div>
    </div>
    <div id="menublogLateral">
        <div id="closeSubMen">
            <img src="images/close3.png" id="closeSubMenu" width="15px" height="auto" alt="">

        </div>
        <script>
        </script>
        
        <div id="liMenu">
            <ul id="ulListGroup">
                <li><strong>Mayo</strong></li>
                <hr>
                <li><?php echo $title[1] ?></li>
                <li><?php echo $title[2] ?></li>
            </ul>
        </div>
    </div>
    <script src="submenBlog.js"></script>

    <div class="container-fluid" id="contHistories">
        <div id="histories">
            <div id="noteBlog3" class="notes  mr-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/branding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title[1]; ?></h5>
                        <p class="card-text"><?php  echo $descrip[1]; ?></p>
                        <a href="console/index.php?r=site/history" class="btn btn-primary">Seguir leyendo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <!-- footer -->
    <footer class="conttainer-fluid mt-4" id="#footer">
        <h6 id="paragraphFooter">Lorenzo de garaicoa y Cuenca | Guayaquil Ecuador | <a href="index.html">ONLINE SHOP</a> | Primera Impresión</h6>
    </footer>
    <!-- /footer -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>