<?php
/* @var $this MaillistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maillists',
);

$this->menu=array(
	array('label'=>'Create Maillist', 'url'=>array('create')),
	array('label'=>'Manage Maillist', 'url'=>array('admin')),
);
?>

<h1>Maillists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
