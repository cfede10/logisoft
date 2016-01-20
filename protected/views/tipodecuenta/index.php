<?php
/* @var $this TipodecuentaController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array (
		'Tipodecuentas' 
);

$this->menu = array (
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Administrar',
				'url' => array (
						'admin' 
				) 
		) 
);
?>

<h1>Tipo de cuentas</h1>

<?php

$this->widget ( 'zii.widgets.CListView', array (
		'dataProvider' => $dataProvider,
		'itemView' => '_view',
		'pager' => array (
				'htmlOptions' => array (
						'class' => 'pagination' 
				) 
		) 
) );
?>
