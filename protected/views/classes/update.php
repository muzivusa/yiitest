<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	$model->Name=>array('view','id'=>$model->idclasses),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'Create Classes', 'url'=>array('create')),
	array('label'=>'View Classes', 'url'=>array('view', 'id'=>$model->idclasses)),
	array('label'=>'Manage Classes', 'url'=>array('admin')),
);
?>

<h1>Update Classes <?php echo $model->idclasses; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>