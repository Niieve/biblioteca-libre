<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $us_Rut
 * @property string $us_Nombre
 * @property string $us_ApellidoP
 * @property string $us_ApellidoM
 * @property string $us_Direccion
 * @property integer $us_Telefono
 *
 * The followings are the available model relations:
 * @property Prestamo[] $prestamos
 */
class Usuario extends CActiveRecord{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		return array(
			array('us_Rut, us_Nombre, us_ApellidoP, us_ApellidoM, us_Direccion', 'required'),
			array('us_Telefono', 'numerical', 'integerOnly'=>true,'max' => 999999999999999, 'min' => 1000000),
			array('us_Rut','unique', 'attributeName' => 'us_Rut'),
			array('us_Nombre,us_ApellidoP, us_ApellidoM', 'validatexto'),
			array('us_Direccion', 'length', 'max'=>100),
			array('us_Rut', 'validaRutCaracter'),
            array('us_Rut', 'validateRut'),
            array('us_Rut', 'validaRutUnico'),
            array('us_Direccion', 'validatexto2'),
            array('us_Direccion, us_Nombre, us_ApellidoP,us_ApellidoM', 'validatexto3'),
            array('us_Rut','length', 'max' => 20),
            array('us_Nombre', 'length', 'min' => 3, 'max' => 25),
            array('us_ApellidoP, us_ApellidoM', 'length', 'min' => 3, 'max' => 50),
			array('us_Rut, us_Nombre, us_ApellidoP, us_ApellidoM, us_Direccion, us_Telefono', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		return array(
			'prestamos' => array(self::HAS_MANY, 'Prestamo', 'us_Rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'us_Rut' => 'Rut',
			'us_Nombre' => 'Nombre',
			'us_ApellidoP' => 'Apellido Paterno',
			'us_ApellidoM' => 'Apellido Materno',
			'us_Direccion' => 'Dirección',
			'us_Telefono' => 'Télefono',
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

		$criteria->compare('us_Rut',$this->us_Rut,true);
		$criteria->addSearchCondition('LOWER(us_Nombre)', strtolower($this->us_Nombre));
        $criteria->addSearchCondition('LOWER(us_ApellidoP)', strtolower($this->us_ApellidoP));
        $criteria->addSearchCondition('LOWER(us_ApellidoM)', strtolower($this->us_ApellidoM));
		//$criteria->compare('us_Direccion',$this->us_Direccion,true);
		$criteria->compare('us_Telefono',$this->us_Telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}


public function validateRut($attribute, $params) {
		$data = explode('-', $this->us_Rut);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('Rut', 'El Rut no es válido');
    }


    public function validatexto($attribute, $params) {
        $pattern = '/^([a-zA-ZñÑÁÉÍÓÚáéíóú]+([[:space:]]{0,2}[a-zA-ZñÑÁÉÍÓÚáéíóú]+)*)$/';
        
        if (!preg_match($pattern, $this->$attribute))
            $this->addError($attribute, 'Error sólo letras o verifique que no tenga espacios al final');
    }

    public function validaRutCaracter($attribute, $params) {
        $pattern = '/^([0-9.]+\-+[0-9kK]{1}+)$/';
        $pattern2 = '/^([0-9.]{1}+\-+[0-9kK]{1}+)$/';
        $pattern3 = '/^([0.]+\-+[0-9kK]{1}+)$/';

        if (!preg_match($pattern, $this->$attribute) OR preg_match($pattern2, $this->$attribute) OR preg_match($pattern3, $this->$attribute))
            $this->addError($attribute, 'El Rut no es válido');
    }

    public function validaRutUnico($attribute, $params) {
        if (Yii::app()->user->um->loadUser($this->$attribute))
            $this->addError($attribute, 'Rut ya existe y esta siendo ocupado');
    }

    public function validatexto2($attribute, $params) {
        $pattern = '/^([a-zA-ZñÑÁÉÍÓÚáéíóú0-9º°\.\,\'\"\)\(\-\@\:\/\+]+([[:space:]]{0,2}[a-zA-ZñÑÁÉÍÓÚáéíóú0-9º°\.\,\'\"\)\(\-\@\:\/\+]+)*)$/';
        $pattern2 = '/^([0-9º°\.\,\'\"\)\(\-\@\:\/\+]+)$/';
        
        if (!preg_match($pattern, $this->$attribute))
            $this->addError($attribute, 'Error sólo letras o letras y número, verifique que no tenga espacios al final o muchos en medio.');
        if (preg_match($pattern2, $this->$attribute))
            $this->addError($attribute, 'Error No puede ser solo números o caracteres especiales');
    }

    public function validatexto3($attribute, $params) {
        $pattern2 = '/(a{3}|e{3}|i{4}|o{3}|u{3}|b{3}|c{3}|d{3}|f{3}|g{3}|h{3}|j{3}|k{3}|l{4}|m{3}|n{3}|ñ{3}|p{3}|q{3}|r{3}|s{3}|t{3}|v{3}|w{4}|x{3}|y{3}|z{3}|º{2}|°{2}|\.{2}|\'{2}|\"{2}|\){2}|\({2}|\,{2}|\-{2}|\@{2}|\:{2}|\/{3}|\+{2})/i';
        $pattern3 = '/(A{3}|E{3}|I{4}|O{3}|U{3}|B{3}|C{3}|D{3}|F{3}|G{3}|H{3}|J{3}|K{3}|L{4}|M{3}|N{3}|Ñ{3}|P{3}|Q{3}|R{3}|S{3}|T{3}|V{3}|W{4}|X{3}|Y{3}|Z{3})/i';
        $pattern4 = '/(á{3}|Á{3}|é{3}|É{3}|í{3}|Í{3}|ó{3}|Ó{3}|ú{3}|Ú{3})/i';
        $pattern5 = '/([0-9]{13})/i';
        

        if (preg_match($pattern2, $this->$attribute) OR preg_match($pattern3, $this->$attribute) OR preg_match($pattern4, $this->$attribute))
            $this->addError($attribute, 'Error, verifique que no este repetidos continuamente los caracteres');
        if (preg_match($pattern5, $this->$attribute))
            $this->addError($attribute, 'Error, no puede haber un número superior a 9999999999999');
    }


    public function validaTelefono($attribute, $params) {
        $pattern = '/^([\+]*[0-9]+)$/';
        if (!preg_match($pattern, $this->$attribute))
            $this->addError($attribute, 'No es válido, la forma es Ej; +5698142785 o 98142785');
    }

}