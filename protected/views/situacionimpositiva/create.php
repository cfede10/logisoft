<?php
/* @var $this SituacionimpositivaController */
/* @var $model Situacionimpositiva */
$this->breadcrumbs = array (
		'Situacionimpositivas' => array (
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

<h1>Crear Situacion impositiva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>