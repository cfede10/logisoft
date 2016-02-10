<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Vista de Empleado <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'tipodoc',
		'nrodoc',
		'fechanacimiento',
		'cuil',
		'domicilio',
		'altura',
		'piso',
		'depto',
		'fechaingreso',
		'cargo_id',
		'legajo',
		'mail',
		'telfijo',
		'telmovil',
		'status',
		'provincia_id',
		'localidad_id',
		'fechacreacion',
		'fechamodificacion',
		'creadopor',
		'modificadopor',
	),
)); ?>
