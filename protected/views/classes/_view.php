<?php
/* @var $this ClassesController */
/* @var $data Classes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclasses')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclasses), array('view', 'id'=>$data->idclasses)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StudentID')); ?>:</b>
	<?php echo CHtml::encode($data->StudentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TeacherID')); ?>:</b>
	<?php echo CHtml::encode($data->TeacherID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />


</div>