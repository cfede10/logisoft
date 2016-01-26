<?php
/* @var $this VehiculoController */
/* @var $data Vehiculo */
?>

<div class="media">
	<div class='media-body'>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('patente')); ?>:
	<b><?php echo CHtml::encode($data->patente); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:
	<b><?php echo CHtml::encode($data->modelo); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:
	<b><?php echo CHtml::encode($data->marca); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:
	<b><?php echo CHtml::encode($data->ano); ?></b> <br />
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
	 * <?php /*
	 * <b><?php echo CHtml::encode($data->getAttributeLabel('creadopor')); ?>:</b>
	 * <?php echo CHtml::encode($data->creadopor); ?>
	 * <br />
	 *
	 * <b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	 * <?php echo CHtml::encode($data->modificadopor); ?>
	 */
	
	?>
	<hr>
	</div>
</div>