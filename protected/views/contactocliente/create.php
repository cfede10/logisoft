<?php
/* @var $this ContactoclienteController */
/* @var $model Contactocliente */
$this->breadcrumbs = array (
		'Contactoclientes' => array (
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

<h1>Crear Contacto de cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>