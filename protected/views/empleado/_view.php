<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
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
	 */
	?>
	
	<?php echo CHtml::encode($data->getAttributeLabel('nrodoc')); ?>:
	<b><?php echo CHtml::encode($data->nrodoc); ?></b> <br />
	
	<?php
	/*
	 * <?php echo CHtml::encode($data->getAttributeLabel('fechanacimiento')); ?>:
	 * <b><?php echo CHtml::encode($data->fechanacimiento); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('cuil')); ?>:
	 * <b><?php echo CHtml::encode($data->cuil); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:
	 * <b><?php echo CHtml::encode($data->domicilio); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('altura')); ?>:
	 * <b><?php echo CHtml::encode($data->altura); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('piso')); ?>:
	 * <b><?php echo CHtml::encode($data->piso); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('depto')); ?>:
	 * <b><?php echo CHtml::encode($data->depto); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('fechaingreso')); ?>:
	 * <b><?php echo CHtml::encode($data->fechaingreso); ?></b>
	 * <br />
	 */
	?>

	<?php echo CHtml::encode($data->getAttributeLabel('cargo_id')); ?>:
	<b><?php echo CHtml::encode($data->cargo->descripcion); ?></b> <br />
	
	<?php
	/*
	 * <?php echo CHtml::encode($data->getAttributeLabel('legajo')); ?>:
	 * <b><?php echo CHtml::encode($data->legajo); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:
	 * <b><?php echo CHtml::encode($data->mail); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('telfijo')); ?>:
	 * <b><?php echo CHtml::encode($data->telfijo); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('telmovil')); ?>:
	 * <b><?php echo CHtml::encode($data->telmovil); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('provincia_id')); ?>:
	 * <b><?php echo CHtml::encode($data->provincia_id); ?></b>
	 * <br />
	 *
	 * <?php echo CHtml::encode($data->getAttributeLabel('localidad_id')); ?>:
	 * <b><?php echo CHtml::encode($data->localidad_id); ?></b>
	 * <br />
	 * <?php
	 * /*
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