<?php
/* @var $this MaillistController */
/* @var $model Maillist */

$this->breadcrumbs=array(
	'Maillists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Maillist', 'url'=>array('index')),
	array('label'=>'Create Maillist', 'url'=>array('create')),
	array('label'=>'Update Maillist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Maillist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Maillist', 'url'=>array('admin')),
);
?>

<h1>View Maillist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
	),
)); ?>
