<?php
/* @var $this CategoriasController */
/* @var $model Categorias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_categoria'); ?>
		<?php echo $form->textField($model,'nombre_categoria',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_categoria'); ?>
		<?php echo $form->textField($model,'descripcion_categoria',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->