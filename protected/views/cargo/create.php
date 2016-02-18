<?php
/* @var $this CargoController */
/* @var $model Cargo */
$this->breadcrumbs = array (
		'Cargos' => array (
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

<h1>Crear Cargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>