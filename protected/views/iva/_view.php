<?php
/* @var $this IvaController */
/* @var $data Iva */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<b><?php echo CHtml::encode($data->descripcion); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('porcentaje')); ?>:
	<b><?php echo CHtml::encode($data->porcentaje); ?></b> <br />

	<?php
	/*
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
	 */
	
	?>
	<hr>

	</div>
</div>