<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion_breve
 * @property string $contenido
 * @property string $localimg
 * @property string $videoUrl
 * @property string $creado
 * @property integer $status
 * @property integer $categoria_id
 * @property integer $users_id
 *
 * The followings are the available model relations:
 * @property Comentarios[] $comentarioses
 * @property Categoria $categoria
 * @property Users $users
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('videoUrl, categoria_id, users_id', 'required'),
			array('status, categoria_id, users_id', 'numerical', 'integerOnly'=>true),
			array('titulo, localimg, videoUrl', 'length', 'max'=>255),
			array('descripcion_breve', 'length', 'max'=>511),
			array('contenido, creado', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, descripcion_breve, contenido, localimg, videoUrl, creado, status, categoria_id, users_id', 'safe', 'on'=>'search'),
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
			'comentarioses' => array(self::HAS_MANY, 'Comentarios', 'post_id'),
			'categoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_id'),
			'users' => array(self::BELONGS_TO, 'Users', 'users_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'descripcion_breve' => 'Descripcion Breve',
			'contenido' => 'Contenido',
			'localimg' => 'Localimg',
			'videoUrl' => 'Video Url',
			'creado' => 'Creado',
			'status' => 'Status',
			'categoria_id' => 'Categoria',
			'users_id' => 'Users',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion_breve',$this->descripcion_breve,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('localimg',$this->localimg,true);
		$criteria->compare('videoUrl',$this->videoUrl,true);
		$criteria->compare('creado',$this->creado,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('categoria_id',$this->categoria_id);
		$criteria->compare('users_id',$this->users_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
