<?php
/* @var $this OfficeDetailController */
/* @var $data OfficeDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offica_name')); ?>:</b>
	<?php echo CHtml::encode($data->offica_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_type')); ?>:</b>
	<?php echo CHtml::encode($data->office_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_location')); ?>:</b>
	<?php echo CHtml::encode($data->office_location); ?>
	<br />


</div>