<?php
/* @var $this MaillistController */
/* @var $model Maillist */

$this->breadcrumbs=array(
	'Maillists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maillist', 'url'=>array('index')),
	array('label'=>'Manage Maillist', 'url'=>array('admin')),
);
?>

<h1>Create Maillist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>