<?php
/* @var $this MaillistController */
/* @var $model Maillist */

$this->breadcrumbs=array(
	'Maillists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maillist', 'url'=>array('index')),
	array('label'=>'Create Maillist', 'url'=>array('create')),
	array('label'=>'View Maillist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Maillist', 'url'=>array('admin')),
);
?>

<h1>Update Maillist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>