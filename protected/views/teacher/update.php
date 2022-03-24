<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->idteacher=>array('view','id'=>$model->idteacher),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Create Teacher', 'url'=>array('create')),
	array('label'=>'View Teacher', 'url'=>array('view', 'id'=>$model->idteacher)),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

<h1>Update Teacher <?php echo $model->idteacher; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>