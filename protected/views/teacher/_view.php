<?php
/* @var $this TeacherController */
/* @var $data Teacher */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idteacher')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idteacher), array('view', 'id'=>$data->idteacher)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('First_name')); ?>:</b>
	<?php echo CHtml::encode($data->First_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last_name')); ?>:</b>
	<?php echo CHtml::encode($data->Last_name); ?>
	<br />


</div>