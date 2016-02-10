<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Empleado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>