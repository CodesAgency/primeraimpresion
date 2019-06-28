<?php

/**
 * This is the model class for table "motivo_translado".
 *
 * The followings are the available columns in table 'motivo_translado':
 * @property integer $id_motivo_translado
 * @property string $descripcion_motivo
 *
 * The followings are the available model relations:
 * @property Remision[] $remisions
 */
class MotivoTranslado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'motivo_translado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descripcion_motivo', 'required'),
			array('descripcion_motivo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_motivo_translado, descripcion_motivo', 'safe', 'on'=>'search'),
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
			'remisions' => array(self::HAS_MANY, 'Remision', 'motivo_traslado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_motivo_translado' => 'Id Motivo Translado',
			'descripcion_motivo' => 'Descripcion Motivo',
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

		$criteria->compare('id_motivo_translado',$this->id_motivo_translado);
		$criteria->compare('descripcion_motivo',$this->descripcion_motivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MotivoTranslado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
