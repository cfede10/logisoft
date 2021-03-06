<?php
/* @var $this RemitoventaController */
/* @var $data Remitoventa */
?>

<div class="media">
	<div class='media-body'>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('pedidodeventa_id')); ?>:</b>
	<?php echo CHtml::encode($data->pedidodeventa_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechamodificacion); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('creadopor')); ?>:</b>
	<?php echo CHtml::encode($data->creadopor); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	<?php echo CHtml::encode($data->modificadopor); ?>
	<br />

	</div>
</div>