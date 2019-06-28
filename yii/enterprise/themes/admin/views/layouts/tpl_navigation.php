<div class="navbar navbar-inverse navbar-static-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="index.php">"ERP"<small>&nbsp;</small></a>
          
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
								
			array('label'=>'Identidades', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Clientes', 'url'=>array('/clientes/admin')),
                            array('label'=>'Tipos de Clientes', 'url'=>array('/clientesTipo/admin')),
                            array('label'=>'Proveedores', 'url'=>array('/proveedores/admin')),
                            array('label'=>'Transportistas', 'url'=>array('/transportista/admin')),
                            array('label'=>'Usuarios del Sistema', 'url'=>array('/users/admin')),
                            array('label'=>'Roles de Usuario', 'url'=>array('/usersRol/admin')),
                            
                            )),//
			
                        array('label'=>'Compras', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Cotizaciones', 'url'=>array('#')),
                            array('label'=>'Compras', 'url'=>array('#')),
                            array('label'=>'Remisiones de Compras', 'url'=>array('#')),
                            
                            )),
                        
                        array('label'=>'Inventario', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Categoria de Productos', 'url'=>array('/categorias/admin')),
                            array('label'=>'Productos', 'url'=>array('/products/admin')),
                            
                            )),//
                        
                        array('label'=>'Ventas', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Cotizaciones deVentas', 'url'=>array('#')),
                            array('label'=>'Facturación', 'url'=>array('#')),
                            array('label'=>'Remisiones de Ventas', 'url'=>array('#')),
                            
                            )),
                        
                        array('label'=>'Contabilidad', 'url'=>array('index.php'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('#')),
                            
                            )),
                        
                                                	
                        array('label'=>'Mantenimiento', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Descuentos', 'url'=>array('/descuento/admin')),
                            array('label'=>'Tipos de Motivo de Translados', 'url'=>array('/motivoTranslado/admin')),
                            array('label'=>'Parametrización', 'url'=>array('/parametrizacion/admin')),
                            array('label'=>'Sucursales', 'url'=>array('/sucursal/admin')),
                            array('label'=>'Perfil de la Sucursales', 'url'=>array('/perfil/admin')),
                           
                            
                            )),	//
                        
                       
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                ));
          }
          
          if ($nivel==2)
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
								
			array('label'=>'Clientes', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>""), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/clientes/admin')),
                            array('label'=>'Crear', 'url'=>array('/clientes/create')),
                            array('label'=>'Lista de Clientes', 'url'=>array('/clientes/index')),
                            
                            )),
			
                        
                        
                        array('label'=>'Usuarios', 'url'=>array('#'),'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown","data-description"=>"ESPOCH"), 
                        'items'=>array(
                            array('label'=>'Administrador', 'url'=>array('/users/admin')),
                            array('label'=>'Crear', 'url'=>array('/users/create')),
                            array('label'=>'Lista de Usuarios', 'url'=>array('/users/index')),
                            
                            )),	
                        	
                        
                        
                       
                        array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                        array('label'=>'Cerrar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'linkOptions'=>array("data-description"=>"member area")),
                    ),
                )); 
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

