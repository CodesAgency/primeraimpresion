<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $cedula
 * @property string $nombre
 * @property string $apellido
 * @property string $paralelo
 * @property string $email
 * @property string $nivel
 * @property string $pregunta_seguridad
 * @property string $respuesta_seguridad
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, cedula, nombre, apellido, email, nivel', 'required'),
			array('cedula', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>30),
			array('nombre, apellido', 'length', 'max'=>100),
			array('paralelo, email', 'length', 'max'=>50),
			array('nivel', 'length', 'max'=>1),
			array('pregunta_seguridad, respuesta_seguridad', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, cedula, nombre, apellido, paralelo, email, nivel, pregunta_seguridad, respuesta_seguridad', 'safe', 'on'=>'search'),
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
			'username' => 'Usuario',
			'password' => 'Clave',
			'cedula' => 'Cedula',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'paralelo' => 'Paralelo',
			'email' => 'Email',
			'nivel' => 'Nivel',
			'pregunta_seguridad' => 'Pregunta Seguridad',
			'respuesta_seguridad' => 'Respuesta Seguridad',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('paralelo',$this->paralelo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nivel',$this->nivel,true);
		$criteria->compare('pregunta_seguridad',$this->pregunta_seguridad,true);
		$criteria->compare('respuesta_seguridad',$this->respuesta_seguridad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}