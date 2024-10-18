<?php
/* @var $this EmployeeDetailController */
/* @var $data EmployeeDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('eid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->eid), array('view', 'id'=>$data->eid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_name')); ?>:</b>
	<?php echo CHtml::encode($data->employee_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_type')); ?>:</b>
	<?php echo CHtml::encode($data->employee_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_salary')); ?>:</b>
	<?php echo CHtml::encode($data->employee_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_address')); ?>:</b>
	<?php echo CHtml::encode($data->employee_address); ?>
	<br />


</div>