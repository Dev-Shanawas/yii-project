<?php
/* @var $this EmployeeDetailController */
/* @var $model EmployeeDetail */

$this->breadcrumbs=array(
	'Employee Details'=>array('index'),
	$model->eid=>array('view','id'=>$model->eid),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeDetail', 'url'=>array('index')),
	array('label'=>'Create EmployeeDetail', 'url'=>array('create')),
	array('label'=>'View EmployeeDetail', 'url'=>array('view', 'id'=>$model->eid)),
	array('label'=>'Manage EmployeeDetail', 'url'=>array('admin')),
);
?>

<h1>Update EmployeeDetail <?php echo $model->eid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>