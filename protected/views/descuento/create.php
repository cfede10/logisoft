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
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		)
);
?>

<h1>Crear Descuento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>