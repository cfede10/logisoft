<?php
/* @var $this IvaController */
/* @var $model Iva */
$this->breadcrumbs = array (
		'Ivas' => array (
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

<h1>Crear Iva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>