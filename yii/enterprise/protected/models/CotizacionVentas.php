<?php

/**
 * This is the model class for table "cotizacion_ventas".
 *
 * The followings are the available columns in table 'cotizacion_ventas':
 * @property integer $id_cotizacion_compras
 * @property string $fecha_cotizacion
 * @property integer $id_usuario_cotizante
 * @property integer $id_sucursal
 */
class CotizacionVentas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cotizacion_ventas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_cotizacion, id_usuario_cotizante, id_sucursal', 'required'),
			array('id_usuario_cotizante, id_sucursal', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cotizacion_compras, fecha_cotizacion, id_usuario_cotizante, id_sucursal', 'safe', 'on'=>'search'),
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
			'id_cotizacion_compras' => 'Id Cotizacion Compras',
			'fecha_cotizacion' => 'Fecha Cotizacion',
			'id_usuario_cotizante' => 'Id Usuario Cotizante',
			'id_sucursal' => 'Id Sucursal',
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

		$criteria->compare('id_cotizacion_compras',$this->id_cotizacion_compras);
		$criteria->compare('fecha_cotizacion',$this->fecha_cotizacion,true);
		$criteria->compare('id_usuario_cotizante',$this->id_usuario_cotizante);
		$criteria->compare('id_sucursal',$this->id_sucursal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CotizacionVentas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
