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

<h1>Crear Tipo de usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>