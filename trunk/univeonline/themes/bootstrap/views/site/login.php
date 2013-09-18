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
	<div class = "span6">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
           'buttonType'=>'link',
           'type'=>'info',
           'label'=>'Crear cuenta',
           'size'=>'large',
           'url' => 'index.php?r=usuarios/create',


       )); ?>
	</div>


	<div class = "span6">
		<h5  class = "lead">Inicia sesión</h5>
		<div class="form">
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
			<?php $this->endWidget(); ?>
		</div><!-- form -->


	</div>

</div>