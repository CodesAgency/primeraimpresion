<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_comercial'); ?>
		<?php echo $form->textField($model,'nombre_comercial',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fabricante'); ?>
		<?php echo $form->textField($model,'fabricante',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aplicacion'); ?>
		<?php echo $form->textField($model,'aplicacion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'piezas'); ?>
		<?php echo $form->textField($model,'piezas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calidad'); ?>
		<?php echo $form->textField($model,'calidad',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_qr'); ?>
		<?php echo $form->textField($model,'codigo_qr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'producto_alterno'); ?>
		<?php echo $form->textField($model,'producto_alterno',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiempo_garantia'); ?>
		<?php echo $form->textField($model,'tiempo_garantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productsPeso'); ?>
		<?php echo $form->textField($model,'productsPeso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'products_dimenciones'); ?>
		<?php echo $form->textField($model,'products_dimenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_producto'); ?>
		<?php echo $form->textField($model,'status_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condiciones_especiales'); ?>
		<?php echo $form->textField($model,'condiciones_especiales',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->