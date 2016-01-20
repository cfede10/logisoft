<?php
/* @var $this FacturaventaController */
/* @var $data Facturaventa */
?>

<div class="media">
	<div class='media-body'>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('pedidodeventa_id')); ?>:</b>
	<?php echo CHtml::encode($data->pedidodeventa_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('remitoventa_id')); ?>:</b>
	<?php echo CHtml::encode($data->remitoventa_id); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	<?php echo CHtml::encode($data->iva); ?>
	<br /> <b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />

	<?php 
/*
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	       * <?php echo CHtml::encode($data->total); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('descuento')); ?>:</b>
	       * <?php echo CHtml::encode($data->descuento); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	       * <?php echo CHtml::encode($data->fechacreacion); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:</b>
	       * <?php echo CHtml::encode($data->fechamodificacion); ?>
	       * <br />
	       *
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