<?php
/* @var $this StockController */
/* @var $model Stock */
$this->breadcrumbs = array (
		'Stocks' => array (
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

<h1>Crear Stock</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>