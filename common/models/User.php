<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\helpers\ArrayHelper;
/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    
//    const ROLE_USER =10;
//    const ROLE_STUDENT =20;
//    const ROLE_COMPANY =30;
//    const ROLE_TECHER =40;
//    const ROLE_ORTHERADMIN =50;
//    const ROLE_ADMIN =60;
    
    public $password;
    public $confirm_password;
    public $roles;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }
    
    
      public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'รหัสผู้ใช้'),
            'username' => Yii::t('app', 'ชื่อบัญชีผู้ใช้งาน'),
            'password' => Yii::t('app', 'รหัสผ่าน'),
            'confirm_password' => Yii::t('app', 'ยืนยันรหัสผ่าน'),
            'email' => Yii::t('app', 'อีเมลล์'),
            'status' => Yii::t('app', 'สถานะการใช้งาน'),
            'roles' => Yii::t('app', 'สิทธิ์ของการใช้งาน'),
            'statusName' => Yii::t('app', 'สถานะการใช้งาน'),
            'created_at' => Yii::t('app', 'วันที่สร้าง'),
            'updated_at' => Yii::t('app', 'วันที่แก้ไขล่าสุด'),
           
           
            
            
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    
    public function scenarios()
            
    {
      $scenarios = parent::scenarios();
        $scenarios['registration'] = ['username','email'];
        return $scenarios;
        
    }
    
    
    public function rules()
    {
        return [
            
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            
            
            
            ['confirm_password', 'required'],
            ['confirm_password', 'string', 'min' => 6],
            
            ['confirm_password', 'compare','compareAttribute'=>'password'],

            ['roles', 'safe']
            
            
            
            
//            ['roles','default','value'=>  self::ROLE_USER],            
//            ['roles','in','range'=>[self::ROLE_USER, 
//                self::ROLE_STUDENT,  self::ROLE_ORTHERADMIN, 
//                self::ROLE_COMPANY,  self::ROLE_TECHER,
//                self::ROLE_ADMIN]]
        ];
    }

    
    public function getItemStatus(){
        return [
        self::STATUS_ACTIVE =>'เปิดใช้งาน',
        self::STATUS_DELETED =>'รอยืนยันการเปิดใช้งาน',
            ];
    }
    
    public function getStatusName(){
        
        $items = $this->getItemStatus();
        return array_key_exists($this->status, $items) ? $items[$this->status] : '';
    }
    
    /////////////////////////////////////////////////////////
 public function getAllRoles(){
  $auth = $auth = Yii::$app->authManager;
  return ArrayHelper::map($auth->getRoles(),'name','name');
}

public function getRoleByUser(){
  $auth = Yii::$app->authManager;
  $rolesUser = $auth->getRolesByUser($this->id);
  $roleItems = $this->getAllRoles();
  $roleSelect=[];

  foreach ($roleItems as $key => $roleName) {
    foreach ($rolesUser as $role) {
      if($key==$role->name){
        $roleSelect[$key]=$roleName;
      }
    }
  }
  $this->roles = $roleSelect;
}

public function assignment(){
    $auth = Yii::$app->authManager;
    $roleUser = $auth->getRolesByUser($this->id);
    $auth->revokeAll($this->id);
    foreach ($this->roles as $key => $roleName) {
      $auth->assign($auth->getRole($roleName),$this->id);
    }
}
    /////////////////////////////////////////////////////////

    
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    
          public function getDoc01()
    {
        return $this->hasOne(Doc01::className(), ['Id_doc_01' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
