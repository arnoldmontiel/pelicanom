<?php


$this->menu=array(
	array('label'=>'Create Monitor', 'url'=>array('create')),
	array('label'=>'Manage Monitor', 'url'=>array('admin')),
);
?>

<h1>Monitors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
