<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $titul
 * @property string $meno
 * @property string $priezvisko
 * @property string $email
 * @property string $pass
 * @property string $fakulta
 * @property string $odbor
 * @property string $type
 * @property string $datum_vytvorenia
 *
 * The followings are the available model relations:
 * @property UserPredmet[] $userPredmets
 */
class User extends CActiveRecord
{
	public $password;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('meno, priezvisko, email, pass, fakulta, odbor', 'required'),
			array('titul, meno, priezvisko', 'length', 'max'=>45),
			array('email, odbor', 'length', 'max'=>60),
			array('pass', 'length', 'max'=>64),
			array('fakulta', 'length', 'max'=>100),
			array('email', 'unique'),
			array('email', 'email', 'message'=>'Zadajte email v správnom formáte.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('type, meno, priezvisko, email, fakulta, odbor, datum_vytvorenia', 'safe', 'on'=>'search'),
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
			'userPredmets' => array(self::HAS_MANY, 'UserPredmet', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titul' => 'Titul',
			'meno' => 'Meno',
			'priezvisko' => 'Priezvisko',
			'email' => 'Email',
			'pass' => 'Heslo',
			'fakulta' => 'Fakulta',
			'odbor' => 'Odbor',
			'type' => 'Rola',
			'datum_vytvorenia' => 'Datum registrácie',
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
		$criteria->compare('titul',$this->titul,true);
		$criteria->compare('meno',$this->meno,true);
		$criteria->compare('priezvisko',$this->priezvisko,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fakulta',$this->fakulta,true);
		$criteria->compare('odbor',$this->odbor,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('datum_vytvorenia',$this->datum_vytvorenia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->email,$this->pass);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->email,$this->pass);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}

	public function beforeSave() {
     if (!empty($this->password))
         $this->pass=hash_hmac('sha256', $this->password,Yii::app()->params['encryptionKey']);
     return true;
 	}

 	public function whoIsLogged(){
 		$role = 'student';

 		if($this->type == student){
 			$role = 'student';
 		} else if ($this->type == ucitel){
 			$role = 'ucitel';
 		} else if($this->type == admin){
 			$role = 'admin';
 		}

 		return $role;
 	}

}
