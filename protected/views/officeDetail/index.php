<?php
/* @var $this OfficeDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Office Details',
);

$this->menu=array(
	array('label'=>'Create OfficeDetail', 'url'=>array('create')),
	array('label'=>'Manage OfficeDetail', 'url'=>array('admin')),
);
?>

<h1>Office Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
