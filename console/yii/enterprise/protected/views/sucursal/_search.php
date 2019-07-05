<?php
/* @var $this SucursalController */
/* @var $model Sucursal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_sucursal'); ?>
		<?php echo $form->textField($model,'nombre_sucursal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_responsable'); ?>
		<?php echo $form->textField($model,'id_responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_sucursal'); ?>
		<?php echo $form->textField($model,'telefono_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_sucursal'); ?>
		<?php echo $form->textField($model,'direccion_sucursal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->