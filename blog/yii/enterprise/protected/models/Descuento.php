<?php

/**
 * This is the model class for table "descuento".
 *
 * The followings are the available columns in table 'descuento':
 * @property integer $id_descuento
 * @property string $nombre_descuento
 * @property string $descripcion
 * @property integer $tipo_cliente
 *
 * The followings are the available model relations:
 * @property Clientes[] $clientes
 */
class Descuento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'descuento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_descuento, descripcion, tipo_cliente', 'required'),
			array('tipo_cliente', 'numerical', 'integerOnly'=>true),
			array('nombre_descuento', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_descuento, nombre_descuento, descripcion, tipo_cliente', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Clientes', 'id_descuento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_descuento' => 'Id Descuento',
			'nombre_descuento' => 'Nombre Descuento',
			'descripcion' => 'Descripcion',
			'tipo_cliente' => 'Tipo Cliente',
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

		$criteria->compare('id_descuento',$this->id_descuento);
		$criteria->compare('nombre_descuento',$this->nombre_descuento,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('tipo_cliente',$this->tipo_cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Descuento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
