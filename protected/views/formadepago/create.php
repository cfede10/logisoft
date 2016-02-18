<?php
/* @var $this FormadepagoController */
/* @var $model Formadepago */
$this->breadcrumbs = array (
		'Formadepagos' => array (
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

<h1>Crear Forma de pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>