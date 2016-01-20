<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('razonsocial')); ?>:
	<b><?php echo CHtml::encode($data->razonsocial); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('cuit')); ?>:
	<b><?php echo CHtml::encode($data->cuit); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('domiciliolegal')); ?>:
	<b><?php echo CHtml::encode($data->domiciliolegal); ?></b> <br />
	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('domiciliodeposito')); ?>:
	       * <b><?php echo CHtml::encode($data->domiciliodeposito); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('provincia_id')); ?>:
	       * <b><?php echo CHtml::encode($data->provincia_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('localidad_id')); ?>:
	       * <b><?php echo CHtml::encode($data->localidad_id); ?></b>
	       * <br />
	       */
	?>
	
	<?php echo CHtml::encode($data->getAttributeLabel('emailempresarial1')); ?>:
	<b><?php echo CHtml::encode($data->emailempresarial1); ?></b> <br />
	<?php 
/*
	       * <?php echo CHtml::encode($data->getAttributeLabel('emailempresarial2')); ?>:
	       * <b><?php echo CHtml::encode($data->emailempresarial2); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('iva_id')); ?>:
	       * <b><?php echo CHtml::encode($data->iva_id); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('telfijo')); ?>:
	       * <b><?php echo CHtml::encode($data->telfijo); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('banco')); ?>:
	       * <b><?php echo CHtml::encode($data->banco); ?></b>
	       * <br />
	       *
	       * <?php echo CHtml::encode($data->getAttributeLabel('sucursul')); ?>:
	       * <b><?php echo CHtml::encode($data->sucursul); ?></b>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('tipodecuenta_id')); ?>:</b>
	       * <?php echo CHtml::encode($data->tipodecuenta_id); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('numcuenta')); ?>:</b>
	       * <?php echo CHtml::encode($data->numcuenta); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('cbu')); ?>:</b>
	       * <?php echo CHtml::encode($data->cbu); ?>
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