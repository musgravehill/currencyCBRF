<?php

/**
 * This is the model class for table "{{currency}}".
 *
 * The followings are the available columns in table '{{currency}}':
 * @property integer $id
 * @property string $name
 * @property integer $is_visible
 * @property double $value
 * @property integer $is_auto
 * @property string $date_update
 * @property integer $is_main
 * @property integer $code
 */
class Currency extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Currency the static model class
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
		return '{{currency}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, value, date_update', 'required'),
			array('is_visible, is_auto, is_main, code', 'numerical', 'integerOnly'=>true),
			array('value', 'numerical'),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, is_visible, value, is_auto, date_update, is_main, code', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'is_visible' => 'Is Visible',
			'value' => 'Value',
			'is_auto' => 'Is Auto',
			'date_update' => 'Date Update',
			'is_main' => 'Is Main',
			'code' => 'Code',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('is_visible',$this->is_visible);
		$criteria->compare('value',$this->value);
		$criteria->compare('is_auto',$this->is_auto);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('is_main',$this->is_main);
		$criteria->compare('code',$this->code);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}