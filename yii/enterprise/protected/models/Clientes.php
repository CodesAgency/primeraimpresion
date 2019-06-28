<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $id_cliente
 * @property string $nombre_cliente
 * @property integer $tipo_cliente
 * @property integer $identificacio1
 * @property string $identificacion
 * @property string $telefono_cliente
 * @property string $telefono_cliente2
 * @property string $email_cliente
 * @property string $direccion_cliente
 * @property integer $status_cliente
 * @property string $date_added
 * @property string $fecha_nacimiento
 * @property string $nombre_contacto
 * @property string $telefono_contacto
 * @property string $ciudad
 * @property string $regimen_tributario
 * @property string $forma_pago
 * @property string $dias_credito
 * @property integer $id_descuento
 * @property integer $parametrizacion
 *
 * The followings are the available model relations:
 * @property ClientesTipo $tipoCliente
 * @property Descuento $idDescuento
 * @property Parametrizacion $parametrizacion0
 * @property IdentificacionTipo $identificacio10
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_cliente, tipo_cliente, identificacio1, identificacion, telefono_cliente, telefono_cliente2, email_cliente, direccion_cliente, status_cliente, date_added, fecha_nacimiento, nombre_contacto, telefono_contacto, ciudad, regimen_tributario, forma_pago, dias_credito, id_descuento, parametrizacion', 'required'),
			array('tipo_cliente, identificacio1, status_cliente,  id_lista_precio,id_descuento, parametrizacion', 'numerical', 'integerOnly'=>true),
			array('nombre_cliente, direccion_cliente', 'length', 'max'=>255),
			array('identificacion, telefono_cliente2, telefono_contacto', 'length', 'max'=>13),
			array('telefono_cliente', 'length', 'max'=>30),
			array('email_cliente', 'length', 'max'=>64),
			array('nombre_contacto, ciudad, regimen_tributario, forma_pago, dias_credito', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nombre_cliente, tipo_cliente, identificacio1, identificacion, telefono_cliente, telefono_cliente2, email_cliente, direccion_cliente, status_cliente, date_added, fecha_nacimiento, nombre_contacto, telefono_contacto, ciudad, regimen_tributario, forma_pago, dias_credito, id_descuento, parametrizacion', 'safe', 'on'=>'search'),
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
			'tipoCliente' => array(self::BELONGS_TO, 'ClientesTipo', 'tipo_cliente'),
			'idDescuento' => array(self::BELONGS_TO, 'Descuento', 'id_descuento'),
			'parametrizacion0' => array(self::BELONGS_TO, 'Parametrizacion', 'parametrizacion'),
			'identificacio10' => array(self::BELONGS_TO, 'IdentificacionTipo', 'identificacio1'),
                        'idListaPrecio' => array(self::BELONGS_TO, 'ListaPrecios', 'id_lista_precio'),
                    );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'nombre_cliente' => 'Nombre Cliente',
			'tipo_cliente' => 'Tipo Cliente',
			'identificacio1' => 'Identificacio1',
			'identificacion' => 'Identificacion',
			'telefono_cliente' => 'Tel. Fijo',
			'telefono_cliente2' => 'Tel. Movil',
			'email_cliente' => 'Email Cliente',
			'direccion_cliente' => 'Direccion Cliente',
			'status_cliente' => 'Estado',
			'date_added' => 'Date Added',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'nombre_contacto' => 'Nombre Contacto',
			'telefono_contacto' => 'Telefono Contacto',
			'ciudad' => 'Ciudad',
			'regimen_tributario' => 'Regimen Tributario',
			'forma_pago' => 'Forma Pago',
			'dias_credito' => 'Dias Credito',
			'id_descuento' => 'Descuento',
			'parametrizacion' => 'Parametrizacion',
                        'id_lista_precio' => 'Lista Precio',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('nombre_cliente',$this->nombre_cliente,true);
		$criteria->compare('tipo_cliente',$this->tipo_cliente);
		$criteria->compare('identificacio1',$this->identificacio1);
		$criteria->compare('identificacion',$this->identificacion,true);
		$criteria->compare('telefono_cliente',$this->telefono_cliente,true);
		$criteria->compare('telefono_cliente2',$this->telefono_cliente2,true);
		$criteria->compare('email_cliente',$this->email_cliente,true);
		$criteria->compare('direccion_cliente',$this->direccion_cliente,true);
		$criteria->compare('status_cliente',$this->status_cliente);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('nombre_contacto',$this->nombre_contacto,true);
		$criteria->compare('telefono_contacto',$this->telefono_contacto,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('regimen_tributario',$this->regimen_tributario,true);
		$criteria->compare('forma_pago',$this->forma_pago,true);
		$criteria->compare('dias_credito',$this->dias_credito,true);
		$criteria->compare('id_descuento',$this->id_descuento);
		$criteria->compare('parametrizacion',$this->parametrizacion);
                $criteria->compare('id_lista_precio',$this->id_lista_precio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
