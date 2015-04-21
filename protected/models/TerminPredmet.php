<?php

/**
 * This is the model class for table "termin_predmet".
 *
 * The followings are the available columns in table 'termin_predmet':
 * @property string $id
 * @property string $miestnost
 * @property string $vyucujuci
 * @property string $den
 * @property string $cas
 * @property string $id_predmet
 */
class TerminPredmet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'termin_predmet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('miestnost, vyucujuci, den, cas, id_predmet', 'required'),
			array('miestnost, vyucujuci, cas', 'length', 'max'=>60),
			array('den, kapacita, id_predmet', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, miestnost, vyucujuci, den, cas, kapacita, id_predmet', 'safe', 'on'=>'search'),
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
			'miestnost' => 'Miestnost',
			'vyucujuci' => 'Vyucujuci',
			'den' => 'Den',
			'cas' => 'Cas',
			'kapacita' => 'Kapacita',
			'id_predmet' => 'Id Predmet',
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
		$criteria->compare('miestnost',$this->miestnost,true);
		$criteria->compare('vyucujuci',$this->vyucujuci,true);
		$criteria->compare('den',$this->den,true);
		$criteria->compare('cas',$this->cas,true);
		$criteria->compare('kapacita',$this->kapacita,true);
		$criteria->compare('id_predmet',$this->id_predmet,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TerminPredmet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
