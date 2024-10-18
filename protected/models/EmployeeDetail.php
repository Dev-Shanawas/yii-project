<?php

/**
 * This is the model class for table "employee_detail".
 *
 * The followings are the available columns in table 'employee_detail':
 * @property integer $eid
 * @property string $employee_name
 * @property string $employee_type
 * @property integer $employee_salary
 * @property string $employee_address
 */
class EmployeeDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_name, employee_type, employee_salary, employee_address', 'required'),
			array('employee_salary', 'numerical', 'integerOnly'=>true),
			array('employee_name, employee_address', 'length', 'max'=>1000),
			array('employee_type', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('employee_name, employee_type, employee_salary, employee_address', 'safe', 'on'=>'search'),
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
			'employee_name' => 'Employee Name',
			'employee_type' => 'Employee Type',
			'employee_salary' => 'Employee Salary',
			'employee_address' => 'Employee Address',
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

		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('employee_type',$this->employee_type,true);
		$criteria->compare('employee_salary',$this->employee_salary);
		$criteria->compare('employee_address',$this->employee_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmployeeDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
