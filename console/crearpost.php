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
        $(document).ready(function() {
            $('#txt-content').Editor();

            $('#txt-content').Editor('setText', ['<p style="color:red;">Hola</p>']);

            $('#btn-enviar').click(function(e) {
                e.preventDefault();
                $('#txt-content').text($('#txt-content').Editor('getText'));
                $('#frm-test').submit();
            });
        });
    </script>
    <style>
        input {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                
                <form action="guardarpost.php" method="post" id="frm-test" target="_top" enctype="multipart/form-data">
                    <input type="text" name="titulo" title="Titulo" placeholder="Titulo"/>
                    <input type="text" name="descripcion_breve" title="descripcion" placeholder="Descripción"/>
                    <div class="form-group"></div>
                    <a href="#demo" class="btn btn-info" data-toggle="collapse">Comentario</a>
                    <div class="container"> 
                          <div id="demo" class="collapse">
                             <textarea id="txt-content" name="txt-contentent"></textarea>
                    </div>
                    </div>
                    <br>                    
                    <input type="text" name="video" title="Video" placeholder="video"/>
                   <table>
                       <tr>
                           <td><p>Estado:</p></td>
                       </tr>
                       <tr>
                           <td>Activo<input type="radio" name="status" value="1"></td><td>Inactivo<input type="radio" name="status" value="0"></td>
                       </tr>
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
                    Imagen Principal
                    <input name="imagen" type="file" maxlength="150" id="file">
                    <input type="hidden" name="users_id" value="<?php echo $_REQUEST['idusers']?>">
                    <input type="submit" value="Agregar" name="enviar" style="cursor: pointer">
                </form>
                        <script>
                            let file = document.getElementById('file');
                            
                        </script>
            </div>  
        </div>
        
    </div>


</body>

</html>