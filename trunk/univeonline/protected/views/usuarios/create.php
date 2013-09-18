<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);*/
?>

<h5>Por favor, provee la siguiente información para registrarte en Univeonline</h5>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>