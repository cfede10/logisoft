<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs = array (
		'Usuarios' 
);

$this->menu = array (
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		) 
)
// array('label'=>'Administrar', 'url'=>array('admin')),
// array('label'=>'MENU', 'url'=>array('Menup/index')),
;
?>

<h1>Usuarios</h1>

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
