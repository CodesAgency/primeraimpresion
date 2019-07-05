<?php
/* @var $this StockSucursalController */
/* @var $model StockSucursal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_stock_sucursal'); ?>
		<?php echo $form->textField($model,'id_stock_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sucursal'); ?>
		<?php echo $form->textField($model,'id_sucursal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_neto'); ?>
		<?php echo $form->textField($model,'precio_neto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_concostos'); ?>
		<?php echo $form->textField($model,'precio_concostos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta1'); ?>
		<?php echo $form->textField($model,'precio_venta1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta2'); ?>
		<?php echo $form->textField($model,'precio_venta2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta3'); ?>
		<?php echo $form->textField($model,'precio_venta3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio_venta4'); ?>
		<?php echo $form->textField($model,'precio_venta4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_caducidad'); ?>
		<?php echo $form->textField($model,'fecha_caducidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->