<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
			array('label'=>'Inicio', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Antecedentes', 'url'=>array('#')),
                            array('label'=>'Objetivos', 'url'=>array('/site/index')),
                            array('label'=>'Misión y Visión', 'url'=>array('/site/index')),
                            array('label'=>'Descripcion Web', 'url'=>array('/site/index')),
                            
                            )),
			
					
			array('label'=>'Alumno', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/alumno/admin')),
                            array('label'=>'Crear', 'url'=>array('/alumno/create')),
                            array('label'=>'Lista de Alumno', 'url'=>array('/alumno/index')),
                            
                            )),
							
			array('label'=>'Asignatura', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/asignatura/admin')),
                            array('label'=>'Crear', 'url'=>array('/asignatura/create')),
                            array('label'=>'Lista de Asignaturas', 'url'=>array('/asignatura/index')),
                            
                           
                            )),		
						
                       //Asignaturas o Cursos disponibles
                        
                        array('label'=>'Asignatura o Cursos', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"Disponibles"), 
                        'items'=>array(
                            
                            
                            array('label'=>'Inscribir', 'url'=>array('/asignatura/ver')),
                            array('label'=>'Actividades', 'url'=>array('/asignatura/actividades')),
                            
                           
                            )),		
			
                        
                        
                        
                        
                        array('label'=>'Aula Virtual', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/aulaVirtual/admin')),
                            array('label'=>'Ver', 'url'=>array('/aulaVirtual/index')),
                            array('label'=>'Crear', 'url'=>array('/aulaVirtual/create')),
                           
                            
                            )),		
				
                        array('label'=>'Usuarios', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/users/admin')),
                            array('label'=>'Crear', 'url'=>array('/users/create')),
                            array('label'=>'Lista de Usuarios', 'url'=>array('/users/index')),
                            
                            )),	
                        
                       array('label'=>'Configuracion de', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"Evaluaciones"), 
                        'items'=>array(
                            array('label'=>'Cuestionario Preguntas Cerradas', 'url'=>array('/cuestionario/admin')),
                            array('label'=>'Configurar Evaluación', 'url'=>array('/prueba/create')),
                            array('label'=>'configurar de Banner Informativo', 'url'=>array('/a/index')),
                            array('label'=>'configuracion de Galeria de Imagenes', 'url'=>array('/b/index')),                            
                            array('label'=>'Configurar Juego Ahorcado', 'url'=>array('/juegos/index')),
                            array('label'=>'Respaldo', 'url'=>array('/galeria/index')),
                            
                            )),
                        
                        array('label'=>'Juegos', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Ahorcado    ', 'url'=>array('/cuestionario/admin')),
                            
                            )),
                        
                       
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->