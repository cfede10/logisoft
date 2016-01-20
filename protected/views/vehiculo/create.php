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
				'label' => 'Listar',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		),
		array (
				'label' => 'MENU',
				'url' => array (
						'Menup/index' 
				) 
		) 
);
?>

<h1>Crear Vehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>