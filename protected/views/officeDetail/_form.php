<?php
/* @var $this OfficeDetailController */
/* @var $model OfficeDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'office-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'offica_name'); ?>
		<?php echo $form->textField($model,'offica_name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'offica_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_type'); ?>
		<?php echo $form->textField($model,'office_type',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'office_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_location'); ?>
		<?php echo $form->textField($model,'office_location',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'office_location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->