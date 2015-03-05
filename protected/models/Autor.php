<?php

/**
 * This is the model class for table "autor".
 *
 * The followings are the available columns in table 'autor':
 * @property integer $au_Id
 * @property string $au_Nombre
 * @property string $au_ApellidoP
 * @property string $au_ApellidoM
 *
 * The followings are the available model relations:
 * @property Libro[] $libros
 */
class Autor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Autor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('au_Nombre, au_ApellidoP, au_ApellidoM', 'required'),
			array('au_Nombre', 'length', 'max'=>50),
			array('au_ApellidoP, au_ApellidoM', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('au_Id, au_Nombre, au_ApellidoP, au_ApellidoM', 'safe', 'on'=>'search'),
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
			'libros' => array(self::HAS_MANY, 'Libro', 'au_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'au_Id' => 'Au',
			'au_Nombre' => 'Nombre',
			'au_ApellidoP' => 'Apellido Paterno',
			'au_ApellidoM' => 'Apellido Materno',
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

		$criteria->compare('au_Id',$this->au_Id);
		$criteria->compare('au_Nombre',$this->au_Nombre,true);
		$criteria->compare('au_ApellidoP',$this->au_ApellidoP,true);
		$criteria->compare('au_ApellidoM',$this->au_ApellidoM,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Autor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
