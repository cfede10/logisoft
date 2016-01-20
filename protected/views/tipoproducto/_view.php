<?php
/* @var $this TipoproductoController */
/* @var $data Tipoproducto */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<b><?php echo CHtml::encode($data->descripcion); ?></b> <br />

	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:
	       * <b><?php echo CHtml::encode($data->fechacreacion); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:
	       * <b><?php echo CHtml::encode($data->fechamodificacion); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('creadopor')); ?>:
	       * <b><?php echo CHtml::encode($data->creadopor); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:
	       * <b><?php echo CHtml::encode($data->modificadopor); ?></b>
	       * <br />
	       */
	?>
	<hr>
	</div>
</div>