<?php
/* @var $this PagoController */
/* @var $model Pago */
$this->breadcrumbs = array (
		'Pagos' => array (
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

<h1>Crear Pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>