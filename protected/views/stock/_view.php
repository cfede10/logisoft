<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('unidades')); ?>:
	<b><?php echo CHtml::encode($data->unidades); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('preciounidad')); ?>:
	<b><?php echo CHtml::encode($data->preciounidad); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('producto_id')); ?>:
	<b><?php echo CHtml::encode($data->producto->nombre); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('stockcol')); ?>:
	<b><?php echo CHtml::encode($data->stockcol); ?></b> <br />
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
	 * <br />
	 */
	?>
	<hr>
	</div>
</div>