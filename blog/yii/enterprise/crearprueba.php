<?php $nivel = yii::app()->user->getState("nivel"); 
echo $nivel;
?>
<center>
      <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
      <div style="overflow-x:auto;">
        <table class="table">
            <tr>
                <tr>
                    <td>Fecha de la Prueba:</td><td><p><input type="date" required name="pregunta" values=""/></p></td>
                </tr>
		<tr>
                    <td>Tiempo de Duracion:</td><td><p><select name="t1">
<option value="0">0 Hora</option>
<option value="1">1 Hora</option>
<option value="2">2 Horas</option>
<option value="3">3 Horas</option>
<option value="4">4 Horas</option>
<option value="5">5 Horas</option>
<option value="6">6 Horas</option>
<option value="7">7 Horas</option>
<option value="8">8 Horas</option>
<option value="9">9 Horas</option>
<option value="10">10 Horas</option>
<option value="11">11 Horas</option>
<option value="12">12 Horas</option>

</select> : <select name="t1">
<option value="0">0 minutos</option>
<option value="5">5 minutos</option>
<option value="10">10 minutos</option>
<option value="15">15 minutos</option>
<option value="30">30 minutos</option>
<option value="35">35 minutos</option>
<option value="40">40 minutos</option>
<option value="45">45 minutos</option>
<option value="50">50 minutos</option>
<option value="55">55 minutos</option>

</select></p></td>
                </tr>
				<tr>
                    <td>Respuesta 3:</td><td><p><input type="text" required name="respuesta3" values=""/></p></td>
                </tr>
				<tr>
                    <td>Respuesta 4:</td><td><p><input type="text" required name="respuesta4" values=""/></p></td>
                </tr>
                <tr>
                    <td>Respuesta Correpta:</td><td><p><input type="text" required name="respuesta_correcta" values=""/></p></td>
                </tr>            
                <tr>
                    <td>Asignatura:</td><td><p><input type="text" required name="asignatura" values=""/></p></td>
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
