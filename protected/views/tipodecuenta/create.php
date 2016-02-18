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
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		)
);
?>

<h1>Crear Tipo de cuenta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>