<?php
/* @var $this TipousuarioController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array (
		'Tipos de usuarios' 
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

<h1>Tipos de usuarios</h1>

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
