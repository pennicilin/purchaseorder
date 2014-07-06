<?php
/* @var $this InquiriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inquiries',
);

$this->menu=array(
	array('label'=>'Create Inquiries', 'url'=>array('create')),
	array('label'=>'Manage Inquiries', 'url'=>array('admin')),
);
?>

<h1>Inquiries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
