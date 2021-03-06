<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="media">
	<div class='media-body'>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipodoc')); ?>:</b>
	<?php echo CHtml::encode($data->tipodoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nrodoc')); ?>:</b>
	<?php echo CHtml::encode($data->nrodoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechanacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechanacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuil')); ?>:</b>
	<?php echo CHtml::encode($data->cuil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('domicilio')); ?>:</b>
	<?php echo CHtml::encode($data->domicilio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura')); ?>:</b>
	<?php echo CHtml::encode($data->altura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piso')); ?>:</b>
	<?php echo CHtml::encode($data->piso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depto')); ?>:</b>
	<?php echo CHtml::encode($data->depto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo_id')); ?>:</b>
	<?php echo CHtml::encode($data->cargo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legajo')); ?>:</b>
	<?php echo CHtml::encode($data->legajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telfijo')); ?>:</b>
	<?php echo CHtml::encode($data->telfijo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telmovil')); ?>:</b>
	<?php echo CHtml::encode($data->telmovil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincia_id')); ?>:</b>
	<?php echo CHtml::encode($data->provincia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->localidad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechamodificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechamodificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creadopor')); ?>:</b>
	<?php echo CHtml::encode($data->creadopor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modificadopor')); ?>:</b>
	<?php echo CHtml::encode($data->modificadopor); ?>
	<br />

	*/ ?>
</div>
</div>