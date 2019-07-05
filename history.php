<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
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
        
        <div class="container mt-4" id="contenido">
            <section id="banner">
        
            </section>
            <section class="container mt-4 mb-4">
                <h2><strong>¿Qué es el branding?</strong></h2>
                <h5>Subtítulo de lo que quiera con relación a ltítulo.</h5>
                <div class="paragraph">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Possimus corporis quis delectus, eveniet soluta unde totam beatae voluptates saepe? 
                         Ducimus, asperiores quae accusamus eveniet deleniti reiciendis ullam dicta? Enim, ut.
                         
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Possimus corporis quis delectus, eveniet soluta unde totam beatae voluptates saepe? 
                         Ducimus, asperiores quae accusamus eveniet deleniti reiciendis ullam dicta? Enim, ut.<br>
                         
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Possimus corporis quis delectus, eveniet soluta unde totam beatae voluptates saepe? 
                         Ducimus, asperiores quae accusamus eveniet deleniti reiciendis ullam dicta? Enim, ut.
                         <a href="#">Revisar producto en e-Shop</a>
                    </p>
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
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>