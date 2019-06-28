<?php

/**
 * This is the model class for table "sucursal".
 *
 * The followings are the available columns in table 'sucursal':
 * @property integer $id_sucursal
 * @property string $nombre_sucursal
 * @property integer $id_responsable
 * @property integer $telefono_sucursal
 * @property integer $direccion_sucursal
 *
 * The followings are the available model relations:
 * @property CotizacionCompras[] $cotizacionComprases
 * @property Perfil[] $perfils
 * @property Users $idResponsable
 */
class Sucursal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sucursal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sucursal, nombre_sucursal, id_responsable, telefono_sucursal, direccion_sucursal', 'required'),
			array('id_sucursal, id_responsable, telefono_sucursal, direccion_sucursal', 'numerical', 'integerOnly'=>true),
			array('nombre_sucursal', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sucursal, nombre_sucursal, id_responsable, telefono_sucursal, direccion_sucursal', 'safe', 'on'=>'search'),
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
			'cotizacionComprases' => array(self::HAS_MANY, 'CotizacionCompras', 'id_sucursal'),
			'perfils' => array(self::HAS_MANY, 'Perfil', 'sucursal'),
			'idResponsable' => array(self::BELONGS_TO, 'Users', 'id_responsable'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sucursal' => 'Id Sucursal',
			'nombre_sucursal' => 'Nombre Sucursal',
			'id_responsable' => 'Id Responsable',
			'telefono_sucursal' => 'Telefono Sucursal',
			'direccion_sucursal' => 'Direccion Sucursal',
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

		$criteria->compare('id_sucursal',$this->id_sucursal);
		$criteria->compare('nombre_sucursal',$this->nombre_sucursal,true);
		$criteria->compare('id_responsable',$this->id_responsable);
		$criteria->compare('telefono_sucursal',$this->telefono_sucursal);
		$criteria->compare('direccion_sucursal',$this->direccion_sucursal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sucursal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
