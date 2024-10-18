<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - ';
$this->breadcrumbs=array(
	'Test',
);
?>

<h1>Monthly interest calculator</h1>

<?php if(Yii::app()->user->hasFlash('testform')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('testform'); ?>
</div>

<?php else: ?>

<p>
 Enter your email , Loan amount , Interesr percentage and the no month for calculating the monthly payable amount
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Enter your Email'); ?>
		<?php echo $form->textField($model,'email',array('value' => '')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Enter User Loan Amount'); ?>
		<?php echo $form->textField($model,'amount',array('value' => '')); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Enter the Interest Percentage'); ?>
		<?php echo $form->textField($model,'interest',array('value' => '')); ?>
		<?php echo $form->error($model,'interest'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Enter No of month'); ?>
		<?php echo $form->textField($model,'months',array('value' => '')); ?>
		<?php echo $form->error($model,'months'); ?>
	</div>

<h4>
    <?php if(!empty($dataArray)){

        echo "The Total Loan Amount                            => " . $dataArray['amount'] ."<br>";
        echo "The Interest you are getting for the Loan        => " . $dataArray['interest'] .'%'."<br>";
        echo "The Toatal months you are paying for the Loan    => " . $dataArray['months'] .' Months'."<br>";
        echo "Each month the amount to be payed                => " . $dataArray['totalRate'] ."<br>";

      }
   ?>

	</h4>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Check Total amount'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
