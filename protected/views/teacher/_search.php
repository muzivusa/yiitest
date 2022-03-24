<?php
/* @var $this TeacherController */
/* @var $model Teacher */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idteacher'); ?>
		<?php echo $form->textField($model,'idteacher'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'First_name'); ?>
		<?php echo $form->textField($model,'First_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Last_name'); ?>
		<?php echo $form->textField($model,'Last_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->