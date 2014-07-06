<?php

/**
 * This is the model class for table "inquiries".
 *
 * The followings are the available columns in table 'inquiries':
 * @property integer $id
 * @property string $commodity_type
 * @property integer $gross_weight
 * @property integer $width
 * @property integer $length
 * @property integer $height
 * @property integer $quantity
 * @property string $destination
 * @property string $origin
 * @property integer $is_declined
 * @property string $created_date
 * @property string $modified_date
 */
class Inquiries extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inquiries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gross_weight, width, length, height, quantity, is_declined', 'numerical', 'integerOnly'=>true),
			array('commodity_type, destination, origin', 'length', 'max'=>20),
			// array('created_date, modified_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, commodity_type, gross_weight, width, length, height, quantity, destination, origin, is_declined, created_date, modified_date', 'safe', 'on'=>'search'),
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
			'commodity_type' => 'Commodity Type',
			'gross_weight' => 'Gross Weight',
			'width' => 'Width',
			'length' => 'Length',
			'height' => 'Height',
			'quantity' => 'Quantity',
			'destination' => 'Destination',
			'origin' => 'Origin',
			'is_declined' => 'Is Declined',
			'created_date' => 'Created Date',
			'modified_date' => 'Modified Date',
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
		$criteria->compare('commodity_type',$this->commodity_type,true);
		$criteria->compare('gross_weight',$this->gross_weight);
		$criteria->compare('width',$this->width);
		$criteria->compare('length',$this->length);
		$criteria->compare('height',$this->height);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('origin',$this->origin,true);
		$criteria->compare('is_declined',$this->is_declined);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('modified_date',$this->modified_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inquiries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}



	public function behaviors()
	{
		# code...

		return array(

				'timestamps' => array(

						'class' => 'zii.behaviors.CTimestampBehavior',
						'createAttribute' => 'created_date',
						'updateAttribute' => 'modified_date',
						'setUpdateOnCreate' => true

					)

			);



	}
}
