<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="index.php">"SGC"<small>&nbsp;</small></a>
          
          <div class="nav-collapse">
			<?php
                         $ci2=yii::app()->user->getState("cedula");
                    
                    include 'conexion3.php';
                    $registros=mysqli_query($conexion,"select * from users WHERE cedula='$ci2'") or
                    die("Problemas en el select:".mysqli_error($conexion));

                    if ($reg=mysqli_fetch_array($registros))
                    {
                    $id2=$reg['id'];
                    }
                         $nivel=yii::app()->user->getState("nivel");
     
          //sin nivel
          if ($nivel==null)
          {
               $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            
                            )),
                        
                        array('label'=>'La Empresa', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Misión', 'url'=>array('/site/mision')),
                            array('label'=>'Visión', 'url'=>array('/site/vision')),
                            )),
								
			
                        
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                ));
          }
          
          if ($nivel==1)
          {
                      $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            
                            )),
								
					
			array('label'=>'Pacientes', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador Datos Pers.', 'url'=>array('/pacienteDatos/admin')),
                            array('label'=>'Crear Datos Pers.', 'url'=>array('/pacienteDatos/create')),
                            array('label'=>'Lista de Datos Pers.', 'url'=>array('/pacienteDatos/index')),
                            array('label'=>'Administrador de Inspección.', 'url'=>array('/pacienteDatos/index')),
                            
                            )),	
                        
                        
                        array('label'=>'Usuarios', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/users/admin')),
                            array('label'=>'Crear', 'url'=>array('/users/create')),
                            array('label'=>'Lista de Usuarios', 'url'=>array('/users/index')),
                            
                            )),	
                        
                        array('label'=>'Operaciones', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Area de Trabajo', 'url'=>array('/areaTrabajo/admin')),
                           array('label'=>'Cuestionario de Preguntas', 'url'=>array('/cuestionario/admin')),
                            )),	
                        
                        
                       
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                ));
          }
          
          if ($nivel==2)
          {
              
          }
          
          if ($nivel==3)
          {
              $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/site/index')),
                            
                            )),
								
           		array('label'=>'Entrevista', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Iniciar', 'url'=>array('/entrevista/indexa')),
                            
                            )),
                        
                         
                                               
                        array('label'=>'Perfil', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Cambiar Contraseña', 'url'=>array('/users/updateclave&id='.$id2)),
                            array('label'=>'Agregar Estudios', 'url'=>array('/estudios/create&id='.$id2)),
                            array('label'=>'Agregar Experiencia Laboral', 'url'=>array('/experienciaLaboral/create&id='.$id2)),
                            array('label'=>'Agregar Referencias Personales', 'url'=>array('/referenciasPersonales/create&id='.$id2)),
                            array('label'=>'Modificar Foto', 'url'=>array('/users/foto1')),
                            array('label'=>'Agregar Foto', 'url'=>array('/users/foto')),
                            
                            )),	
                        
                                               
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                ));
                  
              
                             }
          
                             
              
          
                        
                 ?>
    	</div>
    </div>
	</div>
</div>

