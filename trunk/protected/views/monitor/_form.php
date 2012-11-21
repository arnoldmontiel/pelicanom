<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_device'); ?>
		<?php echo $form->textField($model,'Id_device',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Id_device'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_device_type'); ?>
		<?php echo $form->textField($model,'Id_device_type'); ?>
		<?php echo $form->error($model,'Id_device_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_device_state'); ?>
		<?php echo $form->textField($model,'Id_device_state'); ?>
		<?php echo $form->error($model,'Id_device_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->