<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label = $this->pluralize ( $this->class2name ( $this->modelClass ) );
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Crear',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
	array('label'=>'MENU', 'url'=>array('Menup/index')),
);
?>

<h1>Crear <?php echo $this->modelClass; ?></h1>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
