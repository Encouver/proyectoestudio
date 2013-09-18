<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property integer $idRedSocial
 * @property string $nombre
 * @property string $apellido
 * @property string $clave
 * @property string $correo
 * @property string $fechaNac
 * @property boolean $recibirInformacion
 * @property string $pais
 * @property string $fotoBinario
 * @property string $tipoArchivoFoto
 * @property integer $tamanoFoto
 * @property string $sesion
 * @property string $inicioSesion
 * @property string $ubicacion
 * @property string $sexo
 * @property integer $interes
 * @property string $ocupacion
 * @property string $organizacion
 *
 * The followings are the available model relations:
 * @property Redessociales $idRedSocial0
 * @property Intereses $interes0
 * @property Rolusuario[] $rolusuarios
 */
class Usuarios extends CActiveRecord
{
	public $terminos;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, clave, correo', 'required'),
			array('terminos', 'compare', 'compareValue' => true,'message' => 'Debes aceptar ls terminos' ),
			array('correo', 'email'),
			array('correo', 'unique', 'attributeName'=> 'correo', 'caseSensitive' => 'false'),
			array('idRedSocial, interes', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, clave, correo, pais, sesion, inicioSesion, ubicacion, ocupacion, organizacion', 'length', 'max'=>255),
			array('tipoArchivoFoto', 'length', 'max'=>100),
			array('sexo', 'length', 'max'=>200),
			array('recibirInformacion, fotoBinario', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idRedSocial, nombre, apellido, clave, correo, fechaNac, recibirInformacion, pais, fotoBinario, tipoArchivoFoto, tamanoFoto, sesion, inicioSesion, ubicacion, sexo, interes, ocupacion, organizacion', 'safe', 'on'=>'search'),
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
			'idRedSocial0' => array(self::BELONGS_TO, 'Redessociales', 'idRedSocial'),
			'interes0' => array(self::BELONGS_TO, 'Intereses', 'interes'),
			'rolusuarios' => array(self::HAS_MANY, 'Rolusuario', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idRedSocial' => 'Id Red Social',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'clave' => 'Clave',
			'correo' => 'Correo',
			'fechaNac' => 'Fecha Nac',
			'recibirInformacion' => 'Recibir Informacion',
			'pais' => 'Pais',
			'fotoBinario' => 'Foto Binario',
			'tipoArchivoFoto' => 'Tipo Archivo Foto',
			'tamanoFoto' => 'Tamano Foto',
			'sesion' => 'Sesion',
			'inicioSesion' => 'Inicio Sesion',
			'ubicacion' => 'Ubicacion',
			'sexo' => 'Sexo',
			'interes' => 'Interes',
			'ocupacion' => 'Ocupacion',
			'organizacion' => 'Organizacion',
			'terminos' => 'He leido, entiendo y acepto los terminos del sitio.'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('idRedSocial',$this->idRedSocial);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fechaNac',$this->fechaNac,true);
		$criteria->compare('recibirInformacion',$this->recibirInformacion);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('fotoBinario',$this->fotoBinario,true);
		$criteria->compare('tipoArchivoFoto',$this->tipoArchivoFoto,true);
		$criteria->compare('tamanoFoto',$this->tamanoFoto);
		$criteria->compare('sesion',$this->sesion,true);
		$criteria->compare('inicioSesion',$this->inicioSesion,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('interes',$this->interes);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('organizacion',$this->organizacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}