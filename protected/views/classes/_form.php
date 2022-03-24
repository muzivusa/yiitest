<?php
/* @var $this ClassesController */
/* @var $model Classes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'StudentID'); ?>
		<?php echo $form->textField($model,'StudentID'); ?>
		<?php echo $form->error($model,'StudentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TeacherID'); ?>
		<?php echo $form->textField($model,'TeacherID'); ?>
		<?php echo $form->error($model,'TeacherID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->