<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="media">
	<div class='media-body'>

	<?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:
	<b><?php echo CHtml::encode($data->username); ?></b> <br />
	
	<?php
	/*
	 * <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	 * <?php echo CHtml::encode($data->password); ?>
	 * <br />
	 */
	?>

	<?php echo CHtml::encode($data->getAttributeLabel('tipousuario_id')); ?>:
	<b><?php echo CHtml::encode($data->tipousuario->descripcion); ?></b> <br />

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