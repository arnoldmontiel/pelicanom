<?php


$this->menu=array(
	array('label'=>'List Monitor', 'url'=>array('index')),
	array('label'=>'Create Monitor', 'url'=>array('create')),
	array('label'=>'Update Monitor', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Monitor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monitor', 'url'=>array('admin')),
);
?>

<h1>View Monitor #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Id_device',
		'Id_device_type',
		'Id_device_state',
		'description',
		'insert_date',
		'was_sent'
	),
)); ?>
