<?php
/* @var $this LocalidadController */
/* @var $model Localidad */
$this->breadcrumbs = array (
		'Localidades' => array (
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

<h1>Crear Localidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>