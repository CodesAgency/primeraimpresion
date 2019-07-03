<?php

echo '<h3>Categorias</h3>';
                include 'conexion3.php';
                $idcategoria='categorias/categoria&id=';
                
                $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="icon icon-search"></i>  Busqueda Avanzada<span class="glyphicon glyphicon-search"></span>', 'url'=>array('cargosVacantes2/admin'),'itemOptions'=>array('class'=>'')),
				
			),
			));
                $registros=mysqli_query($conexion,"select * from cargos_vacantes GROUP BY cargos_id_cargos") or
                 die("Problemas en el select:".mysqli_error($conexion));
                $impresos=0;
                while ($reg=mysqli_fetch_array($registros))
                {
                 $impresos++;
                 $registros3=mysqli_query($conexion,"select * from cargos_vacantes WHERE cargos_id_cargos='$reg[cargos_id_cargos]'") or
                 die("Problemas en el select:".mysqli_error($conexion));
                 $contador=0;
                
                while ($reg3=mysqli_fetch_array($registros3))
                {
                    $contador++;
                }
                    
                    $registros2=mysqli_query($conexion,"select * from cargos WHERE id_cargos='$reg[cargos_id_cargos]'") or
                 die("Problemas en el select:".mysqli_error($conexion));
                
                    if ($reg2=mysqli_fetch_array($registros2))
                            {
                        $id=$idcategoria.$reg2['id_cargos'];
                 $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>' '.$reg2['nombre_cargo'].' ('.$contador.')', 'url'=>array($id),'itemOptions'=>array('class'=>'')),
			),
			));
                }
                }
                   
?>