<?php
/* @var $this PedidocompraController */
/* @var $data Pedidocompra */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('proveedor_id')); ?>:
	<b><?php echo CHtml::encode($data->proveedor_id); ?></b> <br />
		<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_id')); ?>:</b>
	<?php echo CHtml::encode($data->pago_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detallepedidocompra_id')); ?>:</b>
	<?php echo CHtml::encode($data->detallepedidocompra_id); ?>
	<br />
    -->

	<?php echo CHtml::encode($data->getAttributeLabel('fechapedido')); ?>:
	<b><?php echo CHtml::encode($data->fechapedido); ?></b> <br />

	<?php echo CHtml::encode($data->getAttributeLabel('fechadeentrega')); ?>:
	<b><?php echo CHtml::encode($data->fechadeentrega); ?></b> <br />
	<?php 
/*
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('numerodefactura')); ?>:</b>
	       * <?php echo CHtml::encode($data->numerodefactura); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('numeroremito')); ?>:</b>
	       * <?php echo CHtml::encode($data->numeroremito); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('iva')); ?>:</b>
	       * <?php echo CHtml::encode($data->iva); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	       * <?php echo CHtml::encode($data->subtotal); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	       * <?php echo CHtml::encode($data->total); ?>
	       * <br />
	       *
	       * <b><?php echo CHtml::encode($data->getAttributeLabel('formadepago_id')); ?>:</b>
	       * <?php echo CHtml::encode($data->formadepago_id); ?>
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
</div>
</div>