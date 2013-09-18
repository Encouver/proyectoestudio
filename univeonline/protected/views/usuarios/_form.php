<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idRedSocial'); ?>
		<?php echo $form->textField($model,'idRedSocial'); ?>
		<?php echo $form->error($model,'idRedSocial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaNac'); ?>
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
		<?php echo $form->checkBox($model,'sexo'); ?>
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
		<?php echo $form->error($model,'organizacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->