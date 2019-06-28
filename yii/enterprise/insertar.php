	 <center>
      <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
      <div style="overflow-x:auto;">
        <table class="table">
            <tr>
                <tr>
                    <td>Pregunta:</td><td><p><input type="text" required name="pregunta" values=""/></p></td>
                </tr>
				<tr>
                    <td>Respuesta 1:</td><td><p><input type="text" required name="respuesta1" values=""/></p></td><td>Imagen:</td><td><input type="file" name="imagen" values=""/></td>
                </tr>
				<tr>
                    <td>Respuesta 2:</td><td><p><input type="text" required name="respuesta2" values=""/></p></td>
                </tr>
				<tr>
                    <td>Respuesta 3:</td><td><p><input type="text" required name="respuesta3" values=""/></p></td>
                </tr>
				<tr>
                    <td>Respuesta 4:</td><td><p><input type="text" required name="respuesta4" values=""/></p></td>
                </tr>
                <tr>
                    <td>Respuesta Correpta:</td>
                    <td>
                        <select name="respuesta_correcta" >
        <option value="1">Respuesta 1:</option>
        <option value="2">Respuesta 2:</option>
        <option value="3">Respuesta 3:</option>
        <option value="4">Respuesta 4:</option>
              </select>
                        
                        
                        
                </tr>            
                <tr><?php
        include 'conexion2.php';
        ?>
                    <td>Asignatura:</td><td><p><select name="asignatura" >
        <option value="0">Selección:</option>
        <?php
										
          $query = $mysqli -> query ("SELECT * FROM asignatura");
											
          while ($valores = mysqli_fetch_array($query)) {
												
            echo '<option value="'.utf8_encode($valores['nombre_asignatura']).'">'.utf8_encode($valores['nombre_asignatura']).'</option>';
													
          }
        ?>
      </select>
        </p></td>
                </tr>  
				<tr>
                    <td></td><td><div align="center">
                      <input type="submit" values="Aceptar"/>
                    </div></td>
                </tr>
            </tr>
        </table>
      
      </div>
      </form>  
    </center>
