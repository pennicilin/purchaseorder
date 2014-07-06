<?php
/* @var $this InquiriesController */
/* @var $model Inquiries */

$this->breadcrumbs=array(
	'Inquiries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inquiries', 'url'=>array('index')),
	array('label'=>'Manage Inquiries', 'url'=>array('admin')),
);
?>

<h1>Create Inquiries</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>