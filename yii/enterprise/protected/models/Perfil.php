<?php

/**
 * This is the model class for table "perfil".
 *
 * The followings are the available columns in table 'perfil':
 * @property integer $id_perfil
 * @property string $nombre_empresa
 * @property integer $sucursal
 * @property string $direccion
 * @property string $ciudad
 * @property string $codigo_postal
 * @property string $estado
 * @property string $telefono
 * @property string $email
 * @property integer $impuesto
 * @property string $moneda
 * @property string $logo_url
 *
 * The followings are the available model relations:
 * @property Sucursal $sucursal0
 */
class Perfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_empresa, sucursal, direccion, ciudad, codigo_postal, estado, telefono, email, impuesto, moneda, logo_url', 'required'),
			array('sucursal, impuesto', 'numerical', 'integerOnly'=>true),
			array('nombre_empresa', 'length', 'max'=>150),
			array('direccion, logo_url', 'length', 'max'=>255),
			array('ciudad, codigo_postal, estado', 'length', 'max'=>100),
			array('telefono', 'length', 'max'=>20),
			array('email', 'length', 'max'=>64),
			array('moneda', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perfil, nombre_empresa, sucursal, direccion, ciudad, codigo_postal, estado, telefono, email, impuesto, moneda, logo_url', 'safe', 'on'=>'search'),
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
			'sucursal0' => array(self::BELONGS_TO, 'Sucursal', 'sucursal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_perfil' => 'Id Perfil',
			'nombre_empresa' => 'Nombre Empresa',
			'sucursal' => 'Sucursal',
			'direccion' => 'Direccion',
			'ciudad' => 'Ciudad',
			'codigo_postal' => 'Codigo Postal',
			'estado' => 'Estado',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'impuesto' => 'Impuesto',
			'moneda' => 'Moneda',
			'logo_url' => 'Logo Url',
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

		$criteria->compare('id_perfil',$this->id_perfil);
		$criteria->compare('nombre_empresa',$this->nombre_empresa,true);
		$criteria->compare('sucursal',$this->sucursal);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('codigo_postal',$this->codigo_postal,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('impuesto',$this->impuesto);
		$criteria->compare('moneda',$this->moneda,true);
		$criteria->compare('logo_url',$this->logo_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
