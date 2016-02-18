<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
$this->breadcrumbs = array (
		'Vehiculos' => array (
				'index' 
		),
		'Crear' 
);

$this->menu = array (
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		)
);
?>

<h1>Crear Vehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>