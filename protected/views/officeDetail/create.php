<?php
/* @var $this OfficeDetailController */
/* @var $model OfficeDetail */

$this->breadcrumbs=array(
	'Office Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OfficeDetail', 'url'=>array('index')),
	array('label'=>'Manage OfficeDetail', 'url'=>array('admin')),
);
?>

<h1>Create OfficeDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>