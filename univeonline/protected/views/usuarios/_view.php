<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRedSocial')); ?>:</b>
	<?php echo CHtml::encode($data->idRedSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clave')); ?>:</b>
	<?php echo CHtml::encode($data->clave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNac')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNac); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('recibirInformacion')); ?>:</b>
	<?php echo CHtml::encode($data->recibirInformacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais')); ?>:</b>
	<?php echo CHtml::encode($data->pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fotoBinario')); ?>:</b>
	<?php echo CHtml::encode($data->fotoBinario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoArchivoFoto')); ?>:</b>
	<?php echo CHtml::encode($data->tipoArchivoFoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamanoFoto')); ?>:</b>
	<?php echo CHtml::encode($data->tamanoFoto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sesion')); ?>:</b>
	<?php echo CHtml::encode($data->sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicioSesion')); ?>:</b>
	<?php echo CHtml::encode($data->inicioSesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interes')); ?>:</b>
	<?php echo CHtml::encode($data->interes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizacion')); ?>:</b>
	<?php echo CHtml::encode($data->organizacion); ?>
	<br />

	*/ ?>

</div>