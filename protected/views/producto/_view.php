<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<b><?php echo CHtml::encode($data->nombre); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<b><?php echo CHtml::encode($data->descripcion); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('tipoproducto_id')); ?>:
	<b><?php echo CHtml::encode($data->tipoproducto->descripcion); ?></b> <br />

	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('preciounitario')); ?>:
	       * <b><?php echo CHtml::encode($data->preciounitario); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('packunidades_id')); ?>:
	       * <b><?php echo CHtml::encode($data->packunidades_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('stockminimo')); ?>:
	       * <b><?php echo CHtml::encode($data->stockminimo); ?></b>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('stockmaximo')); ?>:</b>
	       * <?php echo CHtml::encode($data->stockmaximo); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:</b>
	       * <?php echo CHtml::encode($data->proveedor_id); ?>
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
	<hr>
	</div>
</div>