<?php
/* @var $this TipousuarioController */
/* @var $model Tipousuario */
$this->breadcrumbs = array (
		'Tipousuarios' => array (
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

<h1>Crear Tipo de usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>