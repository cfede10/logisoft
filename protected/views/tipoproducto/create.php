<?php
/* @var $this TipoproductoController */
/* @var $model Tipoproducto */
$this->breadcrumbs = array (
		'Tipoproductos' => array (
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

<h1>Crear Tipo de producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>