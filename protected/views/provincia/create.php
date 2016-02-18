<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */
$this->breadcrumbs = array (
		'Provincias' => array (
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

<h1>Crear Provincia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>