<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con  <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'codigo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comercial'); ?>
		<?php echo $form->textField($model,'nombre_comercial',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_comercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fabricante'); ?>
		<?php echo $form->textField($model,'fabricante',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fabricante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aplicacion'); ?>
		<?php echo $form->textField($model,'aplicacion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'aplicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidad'); ?>
		<?php echo $form->textField($model,'unidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'piezas'); ?>
		<?php echo $form->textField($model,'piezas'); ?>
		<?php echo $form->error($model,'piezas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calidad'); ?>
		<?php echo $form->textField($model,'calidad',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'calidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_qr'); ?>
		<?php echo $form->textField($model,'codigo_qr'); ?>
		<?php echo $form->error($model,'codigo_qr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'producto_alterno'); ?>
		<?php echo $form->textField($model,'producto_alterno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'producto_alterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiempo_garantia'); ?>
		<?php echo $form->textField($model,'tiempo_garantia'); ?>
		<?php echo $form->error($model,'tiempo_garantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productsPeso'); ?>
		<?php echo $form->textField($model,'productsPeso'); ?>
		<?php echo $form->error($model,'productsPeso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'products_dimenciones'); ?>
		<?php echo $form->textField($model,'products_dimenciones'); ?>
		<?php echo $form->error($model,'products_dimenciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_producto'); ?>
		<?php echo $form->textField($model,'status_producto'); ?>
		<?php echo $form->error($model,'status_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto'); ?>
		<?php echo $form->error($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_categoria'); ?>
		<?php echo $form->textField($model,'id_categoria'); ?>
		<?php echo $form->error($model,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condiciones_especiales'); ?>
		<?php echo $form->textField($model,'condiciones_especiales',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'condiciones_especiales'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->