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
<div class = "row-fluid">

		<h1  class = "lead" style="color: #048ac2; text-shadow: 0px 2px 3px #a7a7a7; font-family: 'Roboto', sans-serif;">Regístrate</h1>

<div class = "span4 offset1">
		<h5  class = "lead">Por favor, provee la siguiente información para registrarte en <b>univeonline</b></h5>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>

	<div class = "span4 offset2">
	<h5  class = "lead">O regístrate con una cuenta existente de: <br /><br />
		AQUI VA <br /><br /> EL WIDGET CON LAS <br /><br />REDES SPCIALES</h5>

		<?php $this->widget('ext.hoauth.widgets.HOAuth'); ?>
		
	</div>