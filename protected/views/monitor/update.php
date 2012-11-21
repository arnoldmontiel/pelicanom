<?php

$this->menu=array(
	array('label'=>'List Monitor', 'url'=>array('index')),
	array('label'=>'Create Monitor', 'url'=>array('create')),
	array('label'=>'View Monitor', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Monitor', 'url'=>array('admin')),
);
?>

<h1>Update Monitor <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>