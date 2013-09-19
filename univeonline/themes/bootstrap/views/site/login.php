<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class = "row-fluid">

		<h1  class = "lead" style="color: #048ac2; text-shadow: 0px 2px 3px #a7a7a7; font-family: 'Roboto', sans-serif;"> <x style="color: #a7a7a7">></x>Iniciar sesión</h1>



	<div class = "span4 offset1">
		<div class="form">
		<h5  class = "lead">Inicia sesión con tu cuenta <b>univeonline</b></h5>

			<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id'=>'login-form',
			   'type'=>'horizontal',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
			'validateOnSubmit'=>true,
			),
			)); ?>
			<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
			<?php echo $form->textFieldRow($model,'username'); ?>
			<?php echo $form->passwordFieldRow($model,'password'); ?>
			<?php echo $form->checkBoxRow($model,'rememberMe'); ?>
				<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
				           'buttonType'=>'submit',
				           'type'=>'primary',
				           'label'=>'Entrar',
				       )); ?>

				</div>
				<h6 class="lead"> ¿No puedes acceder a tu cuenta?</h6>

			<?php $this->endWidget(); ?>
		</div><!-- form -->


	</div>
	<div class = "span4 offset2">
	<h5  class = "lead">O ingresa con: <br /><br />AQUI VA <br /><br /> EL WIDGET CON LAS <br /><br />REDES SPCIALES</h5>
	</div>
</div>
<div class="clear"></div>
<div class = "row">
			


	<div class = "span12"><center>
	<h4  class = "lead">¿Eres nuevo?<b>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
           'buttonType'=>'link',
           'type'=>'link',
           'label'=>'¡Crea tu cuenta ahora!',
           'size'=>'medium',
           'url' => 'index.php?r=usuarios/create',


       )); ?></b></h4></center>
	</div>

</div>