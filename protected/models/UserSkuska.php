<?php

/**
 * This is the model class for table "user_skuska".
 *
 * The followings are the available columns in table 'user_skuska':
 * @property string $id
 * @property string $id_user
 * @property string $id_skuska
 */
class UserSkuska extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_skuska';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_skuska', 'required'),
			array('id_user, id_skuska', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_user, id_skuska', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'id_skuska' => 'Id Skuska',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_user',$this->id_user,true);
		$criteria->compare('id_skuska',$this->id_skuska,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserSkuska the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave() {
	$checkModel = new UserSkuska;
	$checkModel = UserSkuska::model()->findByAttributes(array('id_user'=>$this->id_user,'id_skuska'=>$this->id_skuska));

	if($checkModel != null){
		$this->addError('id_user','Termín je plný.');
	}
	

	//array('label'=>'Delete Predmet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible' => $isAdmin),

	return parent::beforeSave();
	}

	protected function beforeValidate(){
        if(!empty($this->description) && substr_count($this->description, '"') % 2 !== 0) {
            $this->addError("description", "Odd number of quotes");
            // return false; // stop validation
        }
        return parent::beforeValidate();
    }
}
