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
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		)
);
?>

<h1>Crear Pack de unidades</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>