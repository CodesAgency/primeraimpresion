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
    <style>
        #form-box{
            padding: 25px;
            border: solid 0.5px white;
            border-radius: 10px;
            box-shadow: 2px 5px 15px rgba(10,10,10,0.5);
            background-color: white;
            margin: 15px;
            width: 80%;
            background-color: whitesmoke;
        }
        input{
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            border: none;
        }
        #inputsType{
            display: flex;
            flex-direction: column;
            align-items: start;
        }
        #editorCodec{
            width: 70%;
        }

        #btn-enviar{
            width: 250px;
            padding: 15px;
            transition: ease all 0.2s;
        }
        #btn-enviar:hover{
            transition: ease all 0.4s;
            background-color: #777466  ;
            font-size: 14pt;
            box-shadow: 2px 5px 15px rgba(10,10,10,0.5);;
        }
    </style>
</head>

<body>
        <div id="form-box">
                <form action="guardarpost.php" method="post" id="frm-test">
                    <div id="inputsType">
                    <label for="titulo"><strong>Ingrese el Titular:</strong> </label>
                    <input type="text" name="titulo" title="Titulo" placeholder="Titulo" id="titulo"/>
                    <p id="titleLabel"></p>
                    <input type="text" name="descripcion_breve" title="descripcion" placeholder="Subtítulo" id="subtitulo"/>
                    <p id="subtituloLabel"></p>
                    <a href="#demo" class="btn btn-info" data-toggle="collapse">Describir Historia</a>
                    <div class="container" id="editorCodec"> 
                        <div id="demo" class="collapse">
                           <textarea id="txt-content" name="txt-contentent"></textarea>
                        </div>
                    </div>
                    <br>
                    <input type="text" name="video" title="Video" placeholder="video" id="video"/>
                   <table>
                       <tr>
                           <td><p>Estado:</p></td>
                       </tr>
                       <tr>
                           <td>Activo<input type="radio" name="status" value="1"></td><td>Inactivo<input type="radio" name="status" value="0" id="inputRequerid" requerid></td>
                       </tr>
                       <p id=""></p>
                   </table>
                    <br>
                    <select name="categoria_id">
                        <option value="#">Categoria</option>
                        <?php
                        if ($cat=mysqli_fetch_array($categoria)){
                        ?>
                        <option value="<?php echo $cat['id'];?>"><?php echo utf8_encode($cat['nombre']);?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <input type="hidden" name="users_id" value="<?php echo $_REQUEST['idusers']?>">
                    <input type="submit" class="btn btn-warning" id="btn-enviar" value="PUBLICAR">
                    <script type="text/javascript" src="errorClass.js">
                    </script>
                    </div>
                </form>
        </div>


    
    
    
</body>

</html>