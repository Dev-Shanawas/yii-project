<?php
/* @var $this EmployeeDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Details',
);

$this->menu=array(
	array('label'=>'Create EmployeeDetail', 'url'=>array('create')),
	array('label'=>'Manage EmployeeDetail', 'url'=>array('admin')),
);
?>

<h1>Employee Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
