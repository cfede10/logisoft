<?php
/* @var $this ContactoclienteController */
/* @var $data Contactocliente */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<b><?php echo CHtml::encode($data->nombre); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:
	<b><?php echo CHtml::encode($data->apellido); ?></b> <br />

	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('tipodoc')); ?>:
	       * <b><?php echo CHtml::encode($data->tipodoc); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('nrodoc')); ?>:
	       * <b><?php echo CHtml::encode($data->nrodoc); ?></b>
	       * <br />
	       */
	?>
	
	<?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:
	<b><?php echo CHtml::encode($data->telefono); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:
	<b><?php echo CHtml::encode($data->celular); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:
	<b><?php echo CHtml::encode($data->email); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:
	<b><?php echo CHtml::encode($data->cliente->razonsocial); ?></b> <br />

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
	       *
	       */
	?>
	<hr>
	</div>
</div>