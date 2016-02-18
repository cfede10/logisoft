<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
$this->breadcrumbs = array (
		'Proveedors' => array (
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
		)
);
?>

<h1>Actualizar Proveedor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>