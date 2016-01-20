<?php
/* @var $this DetallepedidocompraController */
/* @var $data Detallepedidocompra */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:
	<b><?php echo CHtml::encode($data->producto_id); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:
	<b><?php echo CHtml::encode($data->cantidad); ?></b> <br /> <b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />
	<?php
	/*
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
	 */
	
	?>
</div>
</div>