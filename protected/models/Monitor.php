<?php

/**
 * This is the model class for table "monitor".
 *
 * The followings are the available columns in table 'monitor':
 * @property integer $Id
 * @property string $Id_device
 * @property integer $Id_device_type
 * @property integer $Id_device_state
 * @property string $description
 * @property string $insert_date
 * @property integer $was_sent
 */
class Monitor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Monitor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'monitor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id_device_type, Id_device_state, was_sent', 'numerical', 'integerOnly'=>true),
			array('Id_device', 'length', 'max'=>45),
			array('description', 'length', 'max'=>200),
			array('insert_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Id_device, Id_device_type, Id_device_state, description, insert_date, was_sent', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'Id_device' => 'Id Device',
			'Id_device_type' => 'Id Device Type',
			'Id_device_state' => 'Id Device State',
			'description' => 'Description',
			'insert_date' => 'Insert Date',
			'was_sent' => 'Was Sent',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Id_device',$this->Id_device,true);
		$criteria->compare('Id_device_type',$this->Id_device_type);
		$criteria->compare('Id_device_state',$this->Id_device_state);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('insert_date',$this->insert_date,true);
		$criteria->compare('was_sent',$this->was_sent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}