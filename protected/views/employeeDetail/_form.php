<?php
/* @var $this EmployeeDetailController */
/* @var $model EmployeeDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'employee_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_type'); ?>
		<?php echo $form->textField($model,'employee_type',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'employee_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_salary'); ?>
		<?php echo $form->textField($model,'employee_salary'); ?>
		<?php echo $form->error($model,'employee_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_address'); ?>
		<?php echo $form->textField($model,'employee_address',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'employee_address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->