<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('nombrecomercial')); ?>:
	       * <b><?php echo CHtml::encode($data->nombrecomercial); ?></b>
	       * <br />
	       */
	?>
	
	<?php echo CHtml::encode($data->getAttributeLabel('razonsocial')); ?>:
	<b><?php echo CHtml::encode($data->razonsocial); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:
	<b><?php echo CHtml::encode($data->cuit); ?></b> <br />
	
	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('llbb')); ?>:
	       * <b><?php echo CHtml::encode($data->llbb); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('situacionimpositiva_id')); ?>:
	       * <b><?php echo CHtml::encode($data->situacionimpositiva->descripcion); ?></b>
	       * <br />
	       */
	?>

	<?php echo CHtml::encode($data->getAttributeLabel('domiciliolegal')); ?>:
	<b><?php echo CHtml::encode($data->domiciliolegal); ?></b> <br />

	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('domiciodeposito')); ?>:
	       * <b><?php echo CHtml::encode($data->domiciodeposito); ?></b>
	       * <br />
	       */
	?>

	<?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:
	<b><?php echo CHtml::encode($data->telefono); ?></b> <br />
	
	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:
	       * <b><?php echo CHtml::encode($data->celular); ?></b>
	       * <br />
	       *
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('emailempresarial1')); ?>:
	       * <b><?php echo CHtml::encode($data->emailempresarial1); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('emailempresarial2')); ?>:
	       * <b><?php echo CHtml::encode($data->emailempresarial2); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('localidad_id')); ?>:
	       * <b><?php echo CHtml::encode($data->localidad_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('provincia_id')); ?>:
	       * <b><?php echo CHtml::encode($data->provincia_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('iva_id')); ?>:
	       * <b><?php echo CHtml::encode($data->iva_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('descuento_id')); ?>:
	       * <b><?php echo CHtml::encode($data->descuento_id); ?></b>
	       * <br />
	       *
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
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	       * <?php echo CHtml::encode($data->modificadopor); ?>
	       * <br />
	       *
	       */
	
	?>
	<hr>
	</div>
</div>