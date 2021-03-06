<?php
namespace common\models;


use yii\base\Model;
use yii\web\ForbiddenHttpException;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            
        ];
    }
    
       public function attributeLabels(){
        return [
            'username' => 'ชื่อผู้ใช้',
           
         'password' => 'รหัสผ่าน',
           
        ];
    } 

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'กรุณาตรวจสอบข้อมูลผู้ใช้และรหัสผ่านอีกครั้ง');
            }
        }
    }
    
    

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */

    

public function login()
{
    if (!$this->validate()) {
          return false;
    }

      if(\Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0)){
        if(\Yii::$app->id=='app-backend' && !\Yii::$app->user->can('loginToBackend')) {
            \Yii::$app->user->logout();
            throw new ForbiddenHttpException('คุณไม่มีสิทธิ์เข้าใช้งานส่วนนี้ ติดต่อผู้ดูแลระบบ');
        }
        return true;
      }
      return false;
}
    
    
    
    
    

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
