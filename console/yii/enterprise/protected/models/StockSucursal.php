<?php

/**
 * This is the model class for table "stock_sucursal".
 *
 * The followings are the available columns in table 'stock_sucursal':
 * @property integer $id_stock_sucursal
 * @property integer $id_producto
 * @property integer $id_sucursal
 * @property string $fecha_ingreso
 * @property double $precio_neto
 * @property double $precio_concostos
 * @property double $precio_venta1
 * @property double $precio_venta2
 * @property double $precio_venta3
 * @property double $precio_venta4
 * @property string $fecha_caducidad
 */
class StockSucursal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_sucursal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_producto, id_sucursal, precio_neto, precio_concostos, precio_venta1, precio_venta2, precio_venta3, precio_venta4, fecha_caducidad', 'required'),
			array('id_producto, id_sucursal', 'numerical', 'integerOnly'=>true),
			array('precio_neto, precio_concostos, precio_venta1, precio_venta2, precio_venta3, precio_venta4', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_stock_sucursal, id_producto, id_sucursal, fecha_ingreso, precio_neto, precio_concostos, precio_venta1, precio_venta2, precio_venta3, precio_venta4, fecha_caducidad', 'safe', 'on'=>'search'),
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
                    'idSucursal' => array(self::BELONGS_TO, 'Sucursal', 'id_sucursal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_stock_sucursal' => 'Id stock Sucursal',
			'id_producto' => 'Producto',
			'id_sucursal' => 'Sucursal',
			'fecha_ingreso' => 'Fecha Ingreso',
			'precio_neto' => 'precio de compra al proveedor',
			'precio_concostos' => 'Precio Concostos',
			'precio_venta1' => 'Precio Venta1',
			'precio_venta2' => 'Precio Venta2',
			'precio_venta3' => 'Precio Venta3',
			'precio_venta4' => 'Precio Venta4',
			'fecha_caducidad' => 'Fecha Caducidad',
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

		$criteria->compare('id_stock_sucursal',$this->id_stock_sucursal);
		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('id_sucursal',$this->id_sucursal);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('precio_neto',$this->precio_neto);
		$criteria->compare('precio_concostos',$this->precio_concostos);
		$criteria->compare('precio_venta1',$this->precio_venta1);
		$criteria->compare('precio_venta2',$this->precio_venta2);
		$criteria->compare('precio_venta3',$this->precio_venta3);
		$criteria->compare('precio_venta4',$this->precio_venta4);
		$criteria->compare('fecha_caducidad',$this->fecha_caducidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StockSucursal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
