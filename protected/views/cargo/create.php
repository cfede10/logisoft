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

<h1>Crear Cargo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>