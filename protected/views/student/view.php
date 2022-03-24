<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->idstudent,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->idstudent)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstudent),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>View Student #<?php echo $model->idstudent; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstudent',
		'First_name',
		'Last_name',
	),
)); ?>
