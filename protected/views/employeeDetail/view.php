<?php
/* @var $this EmployeeDetailController */
/* @var $model EmployeeDetail */

$this->breadcrumbs=array(
	'Employee Details'=>array('index'),
	$model->eid,
);

$this->menu=array(
	array('label'=>'List EmployeeDetail', 'url'=>array('index')),
	array('label'=>'Create EmployeeDetail', 'url'=>array('create')),
	array('label'=>'Update EmployeeDetail', 'url'=>array('update', 'id'=>$model->eid)),
	array('label'=>'Delete EmployeeDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->eid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeDetail', 'url'=>array('admin')),
);
?>

<h1>View EmployeeDetail #<?php echo $model->eid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'eid',
		'employee_name',
		'employee_type',
		'employee_salary',
		'employee_address',
	),
)); ?>
