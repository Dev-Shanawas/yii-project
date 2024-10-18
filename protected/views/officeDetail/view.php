<?php
/* @var $this OfficeDetailController */
/* @var $model OfficeDetail */

$this->breadcrumbs=array(
	'Office Details'=>array('index'),
	$model->oid,
);

$this->menu=array(
	array('label'=>'List OfficeDetail', 'url'=>array('index')),
	array('label'=>'Create OfficeDetail', 'url'=>array('create')),
	array('label'=>'Update OfficeDetail', 'url'=>array('update', 'id'=>$model->oid)),
	array('label'=>'Delete OfficeDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->oid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OfficeDetail', 'url'=>array('admin')),
);
?>

<h1>View OfficeDetail #<?php echo $model->oid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'oid',
		'offica_name',
		'office_type',
		'office_location',
	),
)); ?>
