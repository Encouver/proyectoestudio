<?php

/**
 * This is the model class for table "EventLogSistema".
 *
 * The followings are the available columns in table 'EventLogSistema':
 * @property integer $id
 * @property integer $Codigo
 * @property integer $idUsuario
 * @property boolean $Servidor
 * @property string $Descripcion
 * @property string $Fecha
 * @property string $Ubicacion
 * @property string $ScriptAfectado
 * @property string $OldValue
 * @property string $NewValue
 */
class EventLogSistema extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'EventLogSistema';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Codigo, Servidor, Descripcion, Ubicacion, ScriptAfectado', 'required'),
			array('Codigo, idUsuario', 'numerical', 'integerOnly'=>true),
			array('ScriptAfectado, OldValue, NewValue', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Codigo, idUsuario, Servidor, Descripcion, Fecha, Ubicacion, ScriptAfectado, OldValue, NewValue', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Codigo' => 'Codigo',
			'idUsuario' => 'Id Usuario',
			'Servidor' => 'Servidor',
			'Descripcion' => 'Descripcion',
			'Fecha' => 'Fecha',
			'Ubicacion' => 'Ubicacion',
			'ScriptAfectado' => 'Script Afectado',
			'OldValue' => 'Old Value',
			'NewValue' => 'New Value',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Codigo',$this->Codigo);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('Servidor',$this->Servidor);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Ubicacion',$this->Ubicacion,true);
		$criteria->compare('ScriptAfectado',$this->ScriptAfectado,true);
		$criteria->compare('OldValue',$this->OldValue,true);
		$criteria->compare('NewValue',$this->NewValue,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventLogSistema the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
