<?php
/* @var $this ProvinciaController */
/* @var $data Provincia */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<b><?php echo CHtml::encode($data->nombre); ?></b> <br />
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