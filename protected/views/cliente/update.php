<?php
/* @var $this ClienteController */
/* @var $model Cliente */
$this->breadcrumbs = array (
		'Clientes' => array (
				'index' 
		),
		$model->id => array (
				'view',
				'id' => $model->id 
		),
		'Actualizar' 
);

$this->menu = array (
		array (
				'label' => 'Listar',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Crear',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Ver',
				'url' => array (
						'view',
						'id' => $model->id 
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

<h1>Actualizar Cliente <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>