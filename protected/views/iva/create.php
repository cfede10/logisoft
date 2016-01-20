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

<h1>Crear Iva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>