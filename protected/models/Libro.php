<?php

/**
 * This is the model class for table "libro".
 *
 * The followings are the available columns in table 'libro':
 * @property string $li_Isbn
 * @property string $li_Titulo
 * @property string $li_Editorial
 * @property string $li_Subtitulo
 * @property integer $li_Ejemplares
 * @property string $li_Glosa
 * @property integer $ca_Id
 * @property integer $au_Id
 * @property string $pe_Rut
 *
 * The followings are the available model relations:
 * @property Existencia[] $existencias
 * @property Categoria $ca
 * @property Autor $au
 * @property Personal $peRut
 */
class Libro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Libro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules(){
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('li_Isbn, li_Titulo, li_Editorial, li_Subtitulo, li_Glosa', 'required'),
			array('li_Ejemplares, ca_Id, au_Id', 'numerical', 'integerOnly'=>true),
			array('li_Isbn', 'length', 'max'=>13),
			array('li_Titulo, li_Editorial, li_Subtitulo, li_Glosa', 'length', 'max'=>100),
			array('li_Isbn', 'validatexto'),
			array('li_Editorial,li_Glosa', 'validatexto'),
			array('li_Titulo,li_Subtitulo','validatexto2'),
			array('li_Titulo, li_Editorial, li_Subtitulo, li_Glosa', 'validatexto3'),
			array('pe_Rut', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('li_Isbn, li_Titulo, li_Editorial, li_Subtitulo, li_Ejemplares, li_Glosa, ca_Id, au_Id, pe_Rut', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations(){
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'existencias' => array(self::HAS_MANY, 'Existencia', 'li_Isbn'),
			'ca' => array(self::BELONGS_TO, 'Categoria', 'ca_Id'),
			'au' => array(self::BELONGS_TO, 'Autor', 'au_Id'),
			'peRut' => array(self::BELONGS_TO, 'Personal', 'pe_Rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels(){
		return array(
			'li_Isbn' => 'ISBN',
			'li_Titulo' => 'Título',
			'li_Editorial' => 'Editorial',
			'li_Subtitulo' => 'Subtítulo',
			'li_Ejemplares' => 'Ejemplares',
			'li_Glosa' => 'Glosa',
			'ca_Id' => 'Categoría',
			'au_Id' => 'Autor',
			'pe_Rut' => 'Personal Rut',
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
	public function search(){
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('li_Isbn',$this->li_Isbn,true);
		$criteria->compare('li_Titulo',$this->li_Titulo,true);
		$criteria->compare('li_Editorial',$this->li_Editorial,true);
		$criteria->compare('li_Subtitulo',$this->li_Subtitulo,true);
		$criteria->compare('li_Ejemplares',$this->li_Ejemplares);
		$criteria->compare('li_Glosa',$this->li_Glosa,true);
		$criteria->compare('ca_Id',$this->ca_Id);
		$criteria->compare('au_Id',$this->au_Id);
		$criteria->compare('pe_Rut',$this->pe_Rut,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libro the static model class
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}

	public function validatexto($attribute, $params) {
        $pattern = '/^([a-zA-ZñÑÁÉÍÓÚáéíóú]+([[:space:]]{0,2}[a-zA-ZñÑÁÉÍÓÚáéíóú]+)*)$/';
        
    if (!preg_match($pattern, $this->$attribute))
        $this->addError($attribute, 'Error sólo letras o verifique que no tenga espacios al final');
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

}
