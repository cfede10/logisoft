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

<h1>Crear Pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>