<?php
/* @var $this InquiriesController */
/* @var $data Inquiries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commodity_type')); ?>:</b>
	<?php echo CHtml::encode($data->commodity_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gross_weight')); ?>:</b>
	<?php echo CHtml::encode($data->gross_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('destination')); ?>:</b>
	<?php echo CHtml::encode($data->destination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origin')); ?>:</b>
	<?php echo CHtml::encode($data->origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_declined')); ?>:</b>
	<?php echo CHtml::encode($data->is_declined); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	*/ ?>

</div>