<?php


/* @var $this UsersController */
/* @var $model Users */
$ci2=yii::app()->user->getState("cedula");

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$nivel=yii::app()->user->getState("nivel");
if ($nivel==1){
    

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Ingresar Usuarios', 'url'=>array('create')),
	array('label'=>'Ver Usuarios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'administrador de Usuarios', 'url'=>array('admin')),
);
}
?>

<h1>Actualizar Datos</h1>



<?php 

                    $id1=$model->id;
                    $ci2=yii::app()->user->getState("cedula");
                    
                    include 'conexion3.php';
                    $registros=mysqli_query($conexion,"select * from users WHERE cedula='$ci2'") or
                    die("Problemas en el select:".mysqli_error($conexion));

                    if ($reg=mysqli_fetch_array($registros))
                    {
                    $id2=$reg['id'];
                    }

mysqli_close($conexion);
                    
                    
                    if($id1==$id2)
                    {
                    
                      echo $this->renderPartial('_form', array('model'=>$model)); 
                    }
                    else
                    {
                        echo 'No tiene Permisos para realizar cambios de Acción...su Ip a sido enviada al administrador';
                    }
                        
                    ?>