<?php

/**
 * This is the model class for table "user_details".
 *
 * The followings are the available columns in table 'user_details':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $phone_no_1
 * @property integer $phone_no_2
 * @property string $fax
 * @property string $password
 * @property string $confirm
 * @property integer $newsletter
 * @property string $wallet_amt
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 * @property string $email_verification
 * @property string $verify_code
 */
class UserDetails extends CActiveRecord {

        public $verifyCode;
        public $old_password;
        public $new_password;
        public $repeat_password;

        /**
         * @return string the associated database table name
         */
        public function tableName() {
                return 'user_details';
        }

        /**
         * @return array validation rules for model attributes.
         */
        public function rules() {
                // NOTE: you should only define rules for those attributes that
                // will receive user inputs.
                return array(
                    array('first_name, last_name,phone_no_1,email,password,confirm,gender', 'required'),
                    array('first_name, last_name', 'match', 'pattern' => '/^[a-zA-Z ]+$/'),
                    array('newsletter, status, phone_no_1, phone_no_2,CB, UB,email_verification,verify_code', 'numerical', 'integerOnly' => true),
                    array('first_name, last_name, email', 'length', 'max' => 100),
//                    array('country', 'length', 'max' => 50),
                    array('password, confirm', 'length', 'max' => 225),
                    array('DOU', 'safe'),
                    array('email', 'unique'),
                    //Change password rules
                    array('old_password, new_password, repeat_password', 'required', 'on' => 'changePwd'),
                    array('old_password', 'findPasswords', 'on' => 'changePwd'),
                    array('repeat_password', 'compare', 'compareAttribute' => 'new_password', 'on' => 'changePwd'),
                    // array('newsletter', 'numerical', 'min' => 1, 'max' => 1,'message'=>''),
                    // The following rule is used by search().
                    // @todo Please remove those attributes that should not be searched.
                    array('id, first_name, last_name,dob, gender,email, phone_no_1, phone_no_2, password, confirm, newsletter, status,last_login', 'safe', 'on' => 'search'),
                    array('first_name,last_name,dob,password,email,confirm', 'required', 'on' => 'create'),
                    array('email', 'email', 'on' => 'create'),
                        //array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements(), 'required', 'on' => 'create'),
                );
        }

        /**
         * @return array relational rules.
         */
        public function relations() {
                // NOTE: you may need to adjust the relation name and the related
                // class name for the relations automatically generated below.
                return array(
                );
        }

        /**
         * @return array customized attribute labels (name=>label)
         */
        public function attributeLabels() {
                return array(
                    'id' => 'ID',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'country' => 'Country',
                    'dob' => 'Date of Birth',
                    'gender' => 'Gender',
                    'email' => 'Email',
                    'phone_no_1' => 'Phone No 1',
                    'phone_no_2' => 'Mobile No',
                    'password' => 'Password',
                    'confirm' => 'Confirm Password',
                    'newsletter' => 'Newsletter',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                    'email_verification' => 'Email Verification',
                    'verify_code' => 'Email Verification Code',
                    'last_login' => 'Last Login',
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
        public function search() {
                // @todo Please modify the following code to remove attributes that should not be searched.

                $criteria = new CDbCriteria;

                $criteria->compare('id', $this->id);
                $criteria->compare('first_name', $this->first_name, true);
                $criteria->compare('last_name', $this->last_name, true);
                $criteria->compare('country', $this->country, true);
                $criteria->compare('dob', $this->dob, true);
                $criteria->compare('gender', $this->gender, true);
                $criteria->compare('email', $this->email, true);
                $criteria->compare('phone_no_1', $this->phone_no_1);
                $criteria->compare('phone_no_2', $this->phone_no_2);
                $criteria->compare('password', $this->password, true);
                $criteria->compare('confirm', $this->confirm, true);
                $criteria->compare('newsletter', $this->newsletter);
                $criteria->compare('status', $this->status);
                $criteria->compare('CB', $this->CB);
                $criteria->compare('UB', $this->UB);
                $criteria->compare('DOC', $this->DOC, true);
                $criteria->compare('DOU', $this->DOU, true);
                $criteria->compare('email_verification', $this->email_verification);
                $criteria->compare('verify_code', $this->verify_code);
                $criteria->compare('last_login', $this->last_login, true);

                return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'pagination' => array(
                        'pageSize' => 20,
                    ),
                ));
        }

        //matching the old password with your existing password.
        public function findPasswords($attribute, $params) {
                $user = UserDetails::model()->findByAttributes(array('id' => Yii::app()->session['user']['id']));

                if($user->password != md5($this->old_password))
                        $this->addError($attribute, 'Old password is incorrect.');
        }

        /**
         * Returns the static model of the specified AR class.
         * Please note that you should have this exact method in all your CActiveRecord descendants!
         * @param string $className active record class name.
         * @return UserDetails the static model class
         */
        public static function model($className = __CLASS__) {
                return parent::model($className);
        }

}
