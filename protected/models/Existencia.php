<?php

/**
 * This is the model class for table "existencia".
 *
 * The followings are the available columns in table 'existencia':
 * @property integer $ex_Id
 * @property string $ex_Estado
 * @property string $li_Isbn
 *
 * The followings are the available model relations:
 * @property Libro $liIsbn
 * @property Prestamo[] $prestamos
 */
class Existencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Existencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('li_Isbn', 'required'),
			array('ex_Estado', 'length', 'max'=>10),
			array('li_Isbn', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ex_Id, ex_Estado, li_Isbn', 'safe', 'on'=>'search'),
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
			'liIsbn' => array(self::BELONGS_TO, 'Libro', 'li_Isbn'),
			'prestamos' => array(self::HAS_MANY, 'Prestamo', 'ex_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ex_Id' => 'Ex',
			'ex_Estado' => 'Ex Estado',
			'li_Isbn' => 'Li Isbn',
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

		$criteria->compare('ex_Id',$this->ex_Id);
		$criteria->compare('ex_Estado',$this->ex_Estado,true);
		$criteria->compare('li_Isbn',$this->li_Isbn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Existencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
