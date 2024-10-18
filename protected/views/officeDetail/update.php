<?php
/* @var $this OfficeDetailController */
/* @var $model OfficeDetail */

$this->breadcrumbs=array(
	'Office Details'=>array('index'),
	$model->oid=>array('view','id'=>$model->oid),
	'Update',
);

$this->menu=array(
	array('label'=>'List OfficeDetail', 'url'=>array('index')),
	array('label'=>'Create OfficeDetail', 'url'=>array('create')),
	array('label'=>'View OfficeDetail', 'url'=>array('view', 'id'=>$model->oid)),
	array('label'=>'Manage OfficeDetail', 'url'=>array('admin')),
);
?>

<h1>Update OfficeDetail <?php echo $model->oid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>