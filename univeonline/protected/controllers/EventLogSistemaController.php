<?php

class EventLogSistemaController extends Controller
{
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('RegistrarEvento', 'RegistrarEventoCliente'),
				'users'=>array('*'),
				//'expression' => '(Yii::app()->session["id_usuario"])'  //cambiar a admin
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	// Retorna true si fue exitoso, false sino lo fue
	public function RegistrarEvento($Codigo, $Descripcion, $URL, $ScriptAfectado, $NewValue = null, $OldValue = null)
	{

		$success = false;

		$EventLogSistema = new EventLogSistema ;
		$EventLogSistema->Codigo=$Codigo;
		$EventLogSistema->Descripcion=$Descripcion;
		$EventLogSistema->ScriptAfectado=$ScriptAfectado;
		$EventLogSistema->Ubicacion=$URL;
		if(isset($NewValue)) $EventLogSistema ->NewValue=$NewValue;
		if(isset($OldValue)) $EventLogSistema ->OldValue=$OldValue;
		$EventLogSistema->Servidor = 1;

		if($EventLogSistema ->save()) $success = true;
		return $success;

	}

	// Retorna true si fue exitoso, false sino lo fue
	public function RegistrarEventoCliente($Codigo, $Descripcion, $URL, $ScriptAfectado, $NewValue = null, $OldValue = null)
	{
		$success = false;

		$EventLogSistema  = new EventLogSistema ;
		$EventLogSistema->Codigo=$Codigo;
		$EventLogSistema->Descripcion=$Descripcion;
		$EventLogSistema->ScriptAfectado=$ScriptAfectado;
		$EventLogSistema->Ubicacion=$URL;
		if($NewValue != null) $EventLogSistema ->NewValue=$NewValue;
		if($OldValue != null) $EventLogSistema ->OldValue=$OldValue;
		$EventLogSistema->Servidor = 0;

		if($EventLogSistema ->save()) $success = true;

		return $success;

	}

}

