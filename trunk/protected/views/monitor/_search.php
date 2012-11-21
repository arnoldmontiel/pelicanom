<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_device'); ?>
		<?php echo $form->textField($model,'Id_device',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_device_type'); ?>
		<?php echo $form->textField($model,'Id_device_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_device_state'); ?>
		<?php echo $form->textField($model,'Id_device_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->