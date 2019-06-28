<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_cliente'); ?>
		<?php echo $form->textField($model,'tipo_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacio1'); ?>
		<?php echo $form->textField($model,'identificacio1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_cliente'); ?>
		<?php echo $form->textField($model,'telefono_cliente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_cliente2'); ?>
		<?php echo $form->textField($model,'telefono_cliente2',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_cliente'); ?>
		<?php echo $form->textField($model,'email_cliente',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_cliente'); ?>
		<?php echo $form->textField($model,'direccion_cliente',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_cliente'); ?>
		<?php echo $form->textField($model,'status_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_lista_precio'); ?>
		<?php echo $form->textField($model,'id_lista_precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_contacto'); ?>
		<?php echo $form->textField($model,'nombre_contacto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_contacto'); ?>
		<?php echo $form->textField($model,'telefono_contacto',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regimen_tributario'); ?>
		<?php echo $form->textField($model,'regimen_tributario',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_pago'); ?>
		<?php echo $form->textField($model,'forma_pago',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_credito'); ?>
		<?php echo $form->textField($model,'dias_credito',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_descuento'); ?>
		<?php echo $form->textField($model,'id_descuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parametrizacion'); ?>
		<?php echo $form->textField($model,'parametrizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->