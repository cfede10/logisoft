<?php
/* @var $this PackunidadesController */
/* @var $model Packunidades */
$this->breadcrumbs = array (
		'Packunidades' => array (
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

<h1>Crear Pack de unidades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>