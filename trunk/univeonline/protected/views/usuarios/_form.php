<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php //echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'idRedSocial'); ?>
		<?php echo $form->textField($model,'idRedSocial'); ?>
		<?php echo $form->error($model,'idRedSocial');*/ ?>
	</div>-->

	<!--<div class="row">-->
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	<!--</div>-->

	<!--<div class="row">-->
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	<!--</div>-->

	<!--<div class="row">-->
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->passwordField($model,'clave',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clave'); ?>
	<!--</div>-->

	<!--<div class="row">-->
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'correo'); ?>
	<!--</div>-->
		<?php echo $form->labelEx($model,'terminos'); ?>
		<?php echo $form->checkBox($model,'terminos'); ?>
		<?php echo $form->error($model,'terminos'); ?>


	<!--<div class="row">
		<?php /*echo $form->labelEx($model,'fechaNac'); ?>
		<?php echo $form->textField($model,'fechaNac'); ?>
		<?php echo $form->error($model,'fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recibirInformacion'); ?>
		<?php echo $form->checkBox($model,'recibirInformacion'); ?>
		<?php echo $form->error($model,'recibirInformacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fotoBinario'); ?>
		<?php echo $form->textField($model,'fotoBinario'); ?>
		<?php echo $form->error($model,'fotoBinario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoArchivoFoto'); ?>
		<?php echo $form->textField($model,'tipoArchivoFoto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipoArchivoFoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sesion'); ?>
		<?php echo $form->textField($model,'sesion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicioSesion'); ?>
		<?php echo $form->textField($model,'inicioSesion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'inicioSesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interes'); ?>
		<?php echo $form->textField($model,'interes'); ?>
		<?php echo $form->error($model,'interes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizacion'); ?>
		<?php echo $form->textField($model,'organizacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'organizacion');*/ ?>
	</div>-->
	
	<div class="form-actions">
				<?php $this->widget('bootstrap.widgets.TbButton', array(
				           'buttonType'=>'submit',
				           'type'=>'primary',
				           'label'=>'Crear cuenta',
				       )); ?>
				</div>
			<?php $this->endWidget(); ?>

</div><!-- form -->