<?php
/* @var $this ClientesTipoController */
/* @var $model ClientesTipo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_clientes_tipo'); ?>
		<?php echo $form->textField($model,'id_clientes_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_tipo'); ?>
		<?php echo $form->textField($model,'nombre_tipo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->