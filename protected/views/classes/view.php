<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'Create Classes', 'url'=>array('create')),
	array('label'=>'Update Classes', 'url'=>array('update', 'id'=>$model->idclasses)),
	array('label'=>'Delete Classes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idclasses),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classes', 'url'=>array('admin')),
);
?>

<h1>View Classes #<?php echo $model->idclasses; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idclasses',
		'StudentID',
		'TeacherID',
		'Name',
	),
)); ?>
