<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id_producto
 * @property string $codigo_producto
 * @property string $nombre_producto
 * @property string $nombre_comercial
 * @property string $fabricante
 * @property string $aplicacion
 * @property string $unidad
 * @property integer $piezas
 * @property string $calidad
 * @property integer $codigo_qr
 * @property string $producto_alterno
 * @property integer $tiempo_garantia
 * @property string $tipo
 * @property double $productsPeso
 * @property double $products_dimenciones
 * @property integer $status_producto
 * @property string $date_added
 * @property double $precio_producto
 * @property integer $id_categoria
 * @property integer $stock
 * @property string $condiciones_especiales
 *
 * The followings are the available model relations:
 * @property Historial[] $historials
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_producto, nombre_producto, nombre_comercial, fabricante, aplicacion, unidad, piezas, calidad, codigo_qr, producto_alterno, tiempo_garantia, tipo, productsPeso, products_dimenciones, status_producto, date_added, precio_producto, id_categoria, stock, condiciones_especiales', 'required'),
			array('piezas, codigo_qr, tiempo_garantia, status_producto, id_categoria, stock', 'numerical', 'integerOnly'=>true),
			array('productsPeso, products_dimenciones, precio_producto', 'numerical'),
			array('codigo_producto', 'length', 'max'=>20),
			array('nombre_producto, producto_alterno, condiciones_especiales', 'length', 'max'=>255),
			array('nombre_comercial, fabricante, aplicacion, unidad, calidad', 'length', 'max'=>100),
			array('tipo', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, codigo_producto, nombre_producto, nombre_comercial, fabricante, aplicacion, unidad, piezas, calidad, codigo_qr, producto_alterno, tiempo_garantia, tipo, productsPeso, products_dimenciones, status_producto, date_added, precio_producto, id_categoria, stock, condiciones_especiales', 'safe', 'on'=>'search'),
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
			'historials' => array(self::HAS_MANY, 'Historial', 'id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'codigo_producto' => 'Codigo Producto',
			'nombre_producto' => 'Nombre Producto',
			'nombre_comercial' => 'Nombre Comercial',
			'fabricante' => 'Fabricante',
			'aplicacion' => 'Aplicacion',
			'unidad' => 'Unidad',
			'piezas' => 'Piezas',
			'calidad' => 'Calidad',
			'codigo_qr' => 'Codigo Qr',
			'producto_alterno' => 'Producto Alterno',
			'tiempo_garantia' => 'Tiempo Garantia',
			'tipo' => 'Tipo',
			'productsPeso' => 'Products Peso',
			'products_dimenciones' => 'Products Dimenciones',
			'status_producto' => 'Status Producto',
			'date_added' => 'Date Added',
			'precio_producto' => 'Precio Producto',
			'id_categoria' => 'Id Categoria',
			'stock' => 'Stock',
			'condiciones_especiales' => 'Condiciones Especiales',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('codigo_producto',$this->codigo_producto,true);
		$criteria->compare('nombre_producto',$this->nombre_producto,true);
		$criteria->compare('nombre_comercial',$this->nombre_comercial,true);
		$criteria->compare('fabricante',$this->fabricante,true);
		$criteria->compare('aplicacion',$this->aplicacion,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('piezas',$this->piezas);
		$criteria->compare('calidad',$this->calidad,true);
		$criteria->compare('codigo_qr',$this->codigo_qr);
		$criteria->compare('producto_alterno',$this->producto_alterno,true);
		$criteria->compare('tiempo_garantia',$this->tiempo_garantia);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('productsPeso',$this->productsPeso);
		$criteria->compare('products_dimenciones',$this->products_dimenciones);
		$criteria->compare('status_producto',$this->status_producto);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('precio_producto',$this->precio_producto);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('condiciones_especiales',$this->condiciones_especiales,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
