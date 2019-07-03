<?php
/* @var $this UsersRolController */
/* @var $data UsersRol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_users_rol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_users_rol), array('view', 'id'=>$data->id_users_rol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rol')); ?>:</b>
	<?php echo CHtml::encode($data->rol); ?>
	<br />


</div>