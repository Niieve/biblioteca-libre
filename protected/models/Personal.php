<?php

/**
 * This is the model class for table "personal".
 *
 * The followings are the available columns in table 'personal':
 * @property string $pe_Rut
 * @property string $pe_Nombre
 * @property string $pe_ApellidoP
 * @property string $pe_ApellidoM
 * @property integer $pe_Telefono
 * @property string $pe_Clave
 * @property string $pe_Tipo
 *
 * The followings are the available model relations:
 * @property Libro[] $libros
 * @property Prestamo[] $prestamos
 */
class Personal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Personal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pe_Rut, pe_Nombre, pe_ApellidoP, pe_ApellidoM, pe_Clave', 'required'),
			array('pe_Telefono', 'numerical', 'integerOnly'=>true),
			array('pe_Rut', 'length', 'max'=>12),
			array('pe_Nombre', 'length', 'max'=>50),
			array('pe_ApellidoP, pe_ApellidoM', 'length', 'max'=>25),
			array('pe_Clave', 'length', 'max'=>100),
			array('pe_Tipo', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pe_Rut, pe_Nombre, pe_ApellidoP, pe_ApellidoM, pe_Telefono, pe_Clave, pe_Tipo', 'safe', 'on'=>'search'),
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
			'libros' => array(self::HAS_MANY, 'Libro', 'pe_Rut'),
			'prestamos' => array(self::HAS_MANY, 'Prestamo', 'pe_Rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pe_Rut' => 'Pe Rut',
			'pe_Nombre' => 'Pe Nombre',
			'pe_ApellidoP' => 'Pe Apellido P',
			'pe_ApellidoM' => 'Pe Apellido M',
			'pe_Telefono' => 'Pe Telefono',
			'pe_Clave' => 'Pe Clave',
			'pe_Tipo' => 'Pe Tipo',
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

		$criteria->compare('pe_Rut',$this->pe_Rut,true);
		$criteria->compare('pe_Nombre',$this->pe_Nombre,true);
		$criteria->compare('pe_ApellidoP',$this->pe_ApellidoP,true);
		$criteria->compare('pe_ApellidoM',$this->pe_ApellidoM,true);
		$criteria->compare('pe_Telefono',$this->pe_Telefono);
		$criteria->compare('pe_Clave',$this->pe_Clave,true);
		$criteria->compare('pe_Tipo',$this->pe_Tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
