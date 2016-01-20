<?php
/* @var $this DescuentoController */
/* @var $model Descuento */
$this->breadcrumbs = array (
		'Descuentos' => array (
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

<h1>Crear Descuento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>