<?php
/* @var $this PostController */
/* @var $model Post */

	//$inputAreaEditor = $_REQUEST['txt-content'];
	


$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Post', 'url'=>array('index')),
	array('label'=>'Administrador Post', 'url'=>array('admin')),
);
?>

<h1>Crear Post</h1>


<iframe src="editor.html" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
