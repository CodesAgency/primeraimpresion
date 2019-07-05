<?php

/**
 * This is the model class for table "transportista".
 *
 * The followings are the available columns in table 'transportista':
 * @property integer $id_transportista
 * @property string $nombre_transportista
 * @property integer $tipo_identificacion
 * @property string $identificacion_transportista
 * @property string $vehiculo
 * @property string $placa
 * @property string $correo
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Remision[] $remisions
 * @property TipoIdentificacion $tipoIdentificacion
 */
class Transportista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transportista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_transportista, tipo_identificacion, identificacion_transportista, vehiculo, placa, correo, telefono', 'required'),
			array('tipo_identificacion', 'numerical', 'integerOnly'=>true),
			array('nombre_transportista, vehiculo, correo', 'length', 'max'=>100),
			array('identificacion_transportista, telefono', 'length', 'max'=>13),
			array('placa', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transportista, nombre_transportista, tipo_identificacion, identificacion_transportista, vehiculo, placa, correo, telefono', 'safe', 'on'=>'search'),
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
			'remisions' => array(self::HAS_MANY, 'Remision', 'id_transportista'),
			'tipoIdentificacion' => array(self::BELONGS_TO, 'TipoIdentificacion', 'tipo_identificacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transportista' => 'Id Transportista',
			'nombre_transportista' => 'Nombre Transportista',
			'tipo_identificacion' => 'Tipo Identificacion',
			'identificacion_transportista' => 'Identificacion Transportista',
			'vehiculo' => 'Vehiculo',
			'placa' => 'Placa',
			'correo' => 'Correo',
			'telefono' => 'Telefono',
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

		$criteria->compare('id_transportista',$this->id_transportista);
		$criteria->compare('nombre_transportista',$this->nombre_transportista,true);
		$criteria->compare('tipo_identificacion',$this->tipo_identificacion);
		$criteria->compare('identificacion_transportista',$this->identificacion_transportista,true);
		$criteria->compare('vehiculo',$this->vehiculo,true);
		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transportista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
