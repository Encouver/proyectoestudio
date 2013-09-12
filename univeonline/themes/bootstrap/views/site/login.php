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
	<div class = "span12">
	    <h3 class = "lead">Crear una cuenta gratis en univeonline</h3>
	</div>
	<div class = "row-fluid">
		<div class = "span6">
			<br />
			<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
				'id'=>'register-form',
			    'type'=>'horizontal',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>	

			<?php echo $form->textFieldRow($model,'username'); ?>

		<?php echo $form->passwordFieldRow($model,'password',array(
		)); ?>
		<?php echo $form->captchaRow($model,'password',array(
		)); ?>
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
	            'buttonType'=>'submit',
	            'type'=>'primary',
	            'label'=>'Login',
	        )); ?>

		<?php echo $form->passwordFieldRow($model,'password',array(		)); ?>		<?php echo $form->captchaRow($model,'password',array(		)); ?>		<div class="form-actions">			<?php $this->widget('bootstrap.widgets.TbButton', array(	            'buttonType'=>'submit',	            'type'=>'primary',	            'label'=>'Login',	        )); ?>			<?php echo $form->passwordFieldRow($model,'password',array(
			)); ?>
			<?php echo $form->captchaRow($model,'password',array(
			)); ?>
			<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
		            'buttonType'=>'submit',
		            'type'=>'primary',
		            'label'=>'Login',
		        )); ?>
			</div>
			<?php $this->endWidget(); ?>
		
		<div class="addthis_toolbox">
			<h4>Login Social</h4>
		<a class="addthis_login_facebook"></a>
		<a class="addthis_login_google"></a>
		</div>
		
	</div>
	<div class = "span6">
	<h1>Login</h1>

			<p>Please fill out the following form with your login credentials:</p>

			<div class="form">

				<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
					'id'=>'login-form',
				    'type'=>'horizontal',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

				<p class="note">Fields with <span class="required">*</span> are required.</p>

				<?php echo $form->textFieldRow($model,'username'); ?>

				<?php echo $form->passwordFieldRow($model,'password',array(
			        'hint'=>'Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>',
			    )); ?>

				<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

				<div class="form-actions">
					<?php $this->widget('bootstrap.widgets.TbButton', array(
			            'buttonType'=>'submit',
			            'type'=>'primary',
			            'label'=>'Login',
			        )); ?>
				</div>

				<?php $this->endWidget(); ?>

			</div><!-- form -->
		</div>
	</div>
</div>
</div>



<script>
		var addthis_config = {
		       login:{
		               services:{
		                       facebook:{
		                               appId:'myfacebookid'
		                       },
		                       google:{
		                               clientId:'mygoogleid'
		                       }
		               },
		               callback:function(user){
		                       /* Output user properties -- in your real app, you'd get rid of these*/
		                       console.log(user.addthis_signature);
		                       console.log(user.thumbnailURL);
		                       console.log(user.service);
		               }
		       }
		};
		</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4eb14e177a332b5f"></script>
