<?php
/* @var $this EmployeeDetailController */
/* @var $model EmployeeDetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'eid'); ?>
		<?php echo $form->textField($model,'eid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_type'); ?>
		<?php echo $form->textField($model,'employee_type',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_salary'); ?>
		<?php echo $form->textField($model,'employee_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_address'); ?>
		<?php echo $form->textField($model,'employee_address',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->