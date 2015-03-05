<?php

/**
 * This is the model class for table "prestamo".
 *
 * The followings are the available columns in table 'prestamo':
 * @property integer $pr_Id
 * @property string $pr_FechaSalida
 * @property string $pr_FechaDevolucion
 * @property string $us_Rut
 * @property string $pe_Rut
 * @property integer $ex_Id
 *
 * The followings are the available model relations:
 * @property Usuario $usRut
 * @property Personal $peRut
 * @property Existencia $ex
 */
class Prestamo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Prestamo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pr_FechaSalida, pr_FechaDevolucion', 'required'),
			array('ex_Id', 'numerical', 'integerOnly'=>true),
			array('us_Rut, pe_Rut', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pr_Id, pr_FechaSalida, pr_FechaDevolucion, us_Rut, pe_Rut, ex_Id', 'safe', 'on'=>'search'),
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
			'usRut' => array(self::BELONGS_TO, 'Usuario', 'us_Rut'),
			'peRut' => array(self::BELONGS_TO, 'Personal', 'pe_Rut'),
			'ex' => array(self::BELONGS_TO, 'Existencia', 'ex_Id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pr_Id' => 'Pr',
			'pr_FechaSalida' => 'Pr Fecha Salida',
			'pr_FechaDevolucion' => 'Pr Fecha Devolucion',
			'us_Rut' => 'Us Rut',
			'pe_Rut' => 'Pe Rut',
			'ex_Id' => 'Ex',
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

		$criteria->compare('pr_Id',$this->pr_Id);
		$criteria->compare('pr_FechaSalida',$this->pr_FechaSalida,true);
		$criteria->compare('pr_FechaDevolucion',$this->pr_FechaDevolucion,true);
		$criteria->compare('us_Rut',$this->us_Rut,true);
		$criteria->compare('pe_Rut',$this->pe_Rut,true);
		$criteria->compare('ex_Id',$this->ex_Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prestamo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
