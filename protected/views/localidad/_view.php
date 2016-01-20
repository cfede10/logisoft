<?php
/* @var $this LocalidadController */
/* @var $data Localidad */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<b><?php echo CHtml::encode($data->nombre); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:
	<b><?php echo CHtml::encode($data->cp); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('provincia_id')); ?>:
	<b><?php echo CHtml::encode($data->provincia_id); ?></b> <br />
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
	 * <?php /*
	 * <b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	 * <?php echo CHtml::encode($data->modificadopor); ?>
	 * <br />
	 */
	
	?>
	<hr>
	</div>
</div>