<?php
/* @var $this PedidodeventaController */
/* @var $data Pedidodeventa */
?>

<div class="media">
	<div class='media-body'>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->pago_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('detallepedidoventa_id')); ?>:</b>
	<?php echo CHtml::encode($data->detallepedidoventa_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('descuento')); ?>:</b>
	<?php echo CHtml::encode($data->descuento); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechamodificacion); ?>
	<br />

	<?php 
/*
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('creadopor')); ?>:</b>
	       * <?php echo CHtml::encode($data->creadopor); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	       * <?php echo CHtml::encode($data->modificadopor); ?>
	       * <br />
	       *
	       */
	?>
</div>
</div>