<?php
/* @var $this ListaPreciosController */
/* @var $model ListaPrecios */

$this->breadcrumbs=array(
	'Lista Precioses'=>array('index'),
	$model->id_lista_precios=>array('view','id'=>$model->id_lista_precios),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista ListaPrecios', 'url'=>array('index')),
	array('label'=>'Crear ListaPrecios', 'url'=>array('create')),
	array('label'=>'VerListaPrecios', 'url'=>array('view', 'id'=>$model->id_lista_precios)),
	array('label'=>'Administrador ListaPrecios', 'url'=>array('admin')),
);
?>

<h1>Actualizar ListaPrecios <?php echo $model->id_lista_precios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>