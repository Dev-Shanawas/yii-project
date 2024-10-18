<?php

/**
 * This is the model class for table "office_to_employee".
 *
 * The followings are the available columns in table 'office_to_employee':
 * @property integer $id
 * @property integer $eid
 * @property integer $oid
 * @property string $employee_name
 * @property string $office_name
 * @property string $in_date
 * @property string $out_date
 *
 * The followings are the available model relations:
 * @property EmployeeDetail $e
 * @property OfficeDetail $o
 */
class OfficeToEmployee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'office_to_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('eid, oid, employee_name, office_name, in_date', 'required'),
			array('eid, oid', 'numerical', 'integerOnly'=>true),
			array('employee_name, office_name, in_date, out_date', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, eid, oid, employee_name, office_name, in_date, out_date', 'safe', 'on'=>'search'),
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
			'e' => array(self::BELONGS_TO, 'EmployeeDetail', 'eid'),
			'o' => array(self::BELONGS_TO, 'OfficeDetail', 'oid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'eid' => 'Eid',
			'oid' => 'Oid',
			'employee_name' => 'Employee Name',
			'office_name' => 'Office Name',
			'in_date' => 'In Date',
			'out_date' => 'Out Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('eid',$this->eid);
		$criteria->compare('oid',$this->oid);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('office_name',$this->office_name,true);
		$criteria->compare('in_date',$this->in_date,true);
		$criteria->compare('out_date',$this->out_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OfficeToEmployee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
