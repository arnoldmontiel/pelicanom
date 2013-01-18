<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_device')); ?>:</b>
	<?php echo CHtml::encode($data->Id_device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_device_type')); ?>:</b>
	<?php echo CHtml::encode($data->Id_device_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_device_state')); ?>:</b>
	<?php echo CHtml::encode($data->Id_device_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insert_time')); ?>:</b>
	<?php echo CHtml::encode($data->insert_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('was_sent')); ?>:</b>
	<?php echo CHtml::encode($data->was_sent); ?>
	<br />

</div>