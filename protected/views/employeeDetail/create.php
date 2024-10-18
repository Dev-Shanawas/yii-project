<?php
/* @var $this EmployeeDetailController */
/* @var $model EmployeeDetail */

$this->breadcrumbs=array(
	'Employee Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmployeeDetail', 'url'=>array('index')),
	array('label'=>'Manage EmployeeDetail', 'url'=>array('admin')),
);
?>

<h1>Create EmployeeDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>