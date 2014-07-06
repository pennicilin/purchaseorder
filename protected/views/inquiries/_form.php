<?php
/* @var $this InquiriesController */
/* @var $model Inquiries */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inquiries-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'commodity_type'); ?>
		<?php echo $form->textField($model,'commodity_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'commodity_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gross_weight'); ?>
		<?php echo $form->textField($model,'gross_weight'); ?>
		<?php echo $form->error($model,'gross_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destination'); ?>
		<?php echo $form->textField($model,'destination',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origin'); ?>
		<?php echo $form->textField($model,'origin',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'origin'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->