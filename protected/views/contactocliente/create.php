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

<h1>Crear Contacto de cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>