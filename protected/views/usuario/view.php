<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Está seguro que desea eliminar este registro?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Vista de Usuario <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array('class'=>'table table-striped'),
	'attributes'=>array(
		'id',
		'username',
		'password',
		'tipousuario_id',
		'status',
		'fechacreacion',
		'fechamodificacion',
		'creadopor',
		'modificadopor',
	),
)); ?>
