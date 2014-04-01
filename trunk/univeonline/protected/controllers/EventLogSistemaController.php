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
	public function actionRegistrarEvento($Servidor, $Codigo, $Descripcion, $URL, $ScriptAfectado, $NewValue = null, $OldValue = null)
	{

		$success = false;

		$EventLogSistema = new EventLogSistema;
		$EventLogSistema->Codigo=$Codigo;
		$EventLogSistema->Descripcion=$Descripcion;
		$EventLogSistema->ScriptAfectado=$ScriptAfectado;
		$EventLogSistema->Ubicacion=$URL;
		if(isset($NewValue)) $EventLogSistema ->NewValue=$NewValue;
		if(isset($OldValue)) $EventLogSistema ->OldValue=$OldValue;
		$EventLogSistema->Servidor = $Servidor;

		if($EventLogSistema ->save()) $success = true;
		return $success;
	}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}