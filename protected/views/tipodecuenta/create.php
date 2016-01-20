<?php
/* @var $this TipodecuentaController */
/* @var $model Tipodecuenta */
$this->breadcrumbs = array (
		'Tipodecuentas' => array (
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

<h1>Crear Tipo de cuenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>