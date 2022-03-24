<?php
/* @var $this ClassesController */
/* @var $model Classes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idclasses'); ?>
		<?php echo $form->textField($model,'idclasses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'StudentID'); ?>
		<?php echo $form->textField($model,'StudentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TeacherID'); ?>
		<?php echo $form->textField($model,'TeacherID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->