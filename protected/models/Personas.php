<?php

/**
 * This is the model class for table "personas".
 *
 * The followings are the available columns in table 'personas':
 * @property integer $PER_CORREL
 * @property string $PER_NOMBRES
 * @property string $PER_APELLIDOS
 * @property string $PER_RUT
 * @property integer $PER_EDAD
 * @property string $PER_CREATE
 * @property string $PER_MODIFIED
 * @property string $PER_NACIMIENTO
 */
class Personas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_NOMBRES, PER_APELLIDOS, PER_RUT, PER_EDAD, PER_CREATE, PER_NACIMIENTO', 'required'),
			array('PER_EDAD', 'numerical', 'integerOnly'=>true),
			array('PER_NOMBRES, PER_APELLIDOS', 'length', 'max'=>80),
			array('PER_RUT', 'length', 'max'=>12),
			array('PER_MODIFIED', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, PER_NOMBRES, PER_APELLIDOS, PER_RUT, PER_EDAD, PER_CREATE, PER_MODIFIED, PER_NACIMIENTO', 'safe', 'on'=>'search'),
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
			'PER_CORREL' => 'Persona',
			'PER_NOMBRES' => 'Nombres',
			'PER_APELLIDOS' => 'Apellidos',
			'PER_RUT' => 'Rut',
			'PER_EDAD' => 'Edad',
			'PER_CREATE' => 'Creado',
			'PER_MODIFIED' => 'Modificado',
			'PER_NACIMIENTO' => 'Fecha de Nacimiento',
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

		$criteria->compare('PER_CORREL',$this->PER_CORREL);
		$criteria->compare('PER_NOMBRES',$this->PER_NOMBRES,true);
		$criteria->compare('PER_APELLIDOS',$this->PER_APELLIDOS,true);
		$criteria->compare('PER_RUT',$this->PER_RUT,true);
		$criteria->compare('PER_EDAD',$this->PER_EDAD);
		$criteria->compare('PER_CREATE',$this->PER_CREATE,true);
		$criteria->compare('PER_MODIFIED',$this->PER_MODIFIED,true);
		$criteria->compare('PER_NACIMIENTO',$this->PER_NACIMIENTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
