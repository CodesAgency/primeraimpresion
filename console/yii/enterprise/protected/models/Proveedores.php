<?php

/**
 * This is the model class for table "proveedores".
 *
 * The followings are the available columns in table 'proveedores':
 * @property integer $id_proveedor
 * @property string $razon_social
 * @property string $ruc
 * @property string $direccion
 * @property string $telefono
 * @property string $nombre_contacto
 * @property string $telefono_contacto
 * @property string $banco_nombre
 * @property string $n_cuenta
 *
 * The followings are the available model relations:
 * @property DetallesCotizacionCompras[] $detallesCotizacionComprases
 * @property DetallesProductoCotizacion[] $detallesProductoCotizacions
 */
class Proveedores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('razon_social, ruc, direccion, telefono, nombre_contacto, telefono_contacto, banco_nombre, n_cuenta', 'required'),
			array('razon_social, nombre_contacto, banco_nombre', 'length', 'max'=>100),
			array('ruc', 'length', 'max'=>13),
			array('direccion', 'length', 'max'=>155),
			array('telefono, telefono_contacto', 'length', 'max'=>10),
			array('n_cuenta', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_proveedor, razon_social, ruc, direccion, telefono, nombre_contacto, telefono_contacto, banco_nombre, n_cuenta', 'safe', 'on'=>'search'),
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
			'detallesCotizacionComprases' => array(self::HAS_MANY, 'DetallesCotizacionCompras', 'id_proveedor'),
			'detallesProductoCotizacions' => array(self::HAS_MANY, 'DetallesProductoCotizacion', 'id_proveeddor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_proveedor' => 'Id Proveedor',
			'razon_social' => 'Razon Social',
			'ruc' => 'Ruc',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'nombre_contacto' => 'Nombre Contacto',
			'telefono_contacto' => 'Telefono Contacto',
			'banco_nombre' => 'Banco Nombre',
			'n_cuenta' => 'N Cuenta',
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

		$criteria->compare('id_proveedor',$this->id_proveedor);
		$criteria->compare('razon_social',$this->razon_social,true);
		$criteria->compare('ruc',$this->ruc,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('nombre_contacto',$this->nombre_contacto,true);
		$criteria->compare('telefono_contacto',$this->telefono_contacto,true);
		$criteria->compare('banco_nombre',$this->banco_nombre,true);
		$criteria->compare('n_cuenta',$this->n_cuenta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proveedores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
