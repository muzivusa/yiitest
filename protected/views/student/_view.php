<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstudent')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstudent), array('view', 'id'=>$data->idstudent)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('First_name')); ?>:</b>
	<?php echo CHtml::encode($data->First_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Last_name')); ?>:</b>
	<?php echo CHtml::encode($data->Last_name); ?>
	<br />


</div>