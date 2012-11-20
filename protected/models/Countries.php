<?php

/**
 * This is the model class for table "tbl_countries".
 *
 * The followings are the available columns in table 'tbl_countries':
 * @property integer $id
 * @property string $code
 * @property string $code3
 * @property integer $numcode
 * @property string $url
 * @property string $name
 * @property double $latitude
 * @property double $longitude
 *
 * The followings are the available model relations:
 * @property Cities[] $cities
 * @property Regions[] $regions
 */
class Countries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Countries the static model class
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
		return 'tbl_countries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, url, name, latitude, longitude', 'required'),
			array('id, numcode', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('code', 'length', 'max'=>2),
			array('code3', 'length', 'max'=>3),
			array('url, name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code, code3, numcode, url, name, latitude, longitude', 'safe', 'on'=>'search'),
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
			'cities' => array(self::HAS_MANY, 'Cities', 'country_id'),
			'regions' => array(self::HAS_MANY, 'Regions', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code' => 'Code',
			'code3' => 'Code3',
			'numcode' => 'Numcode',
			'url' => 'Url',
			'name' => 'Name',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
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
		$criteria->compare('code',$this->code,true);
		$criteria->compare('code3',$this->code3,true);
		$criteria->compare('numcode',$this->numcode);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}