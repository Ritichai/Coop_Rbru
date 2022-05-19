<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;


    /**
     * @inheritdoca
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required',], 
            ['username', 'string', 'min' => 10],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'ชื่อผู้ใช้นี้มีในระบบเเล้ว'],
            ['username', 'integer'],
           

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'อีเมลล์นี้มีในระบบเเล้ว'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"รหัสผ่านไม่ตรงกัน" ],
        ];
    }

    
    
      public function attributeLabels(){
        return [
            'username' => 'ชื่อผู้ใช้',
            'email' => 'อีเมล์',
         'password' => 'รหัสผ่าน',
            'password_repeat' => 'ยืนยันรหัสผ่าน',
        ];
    } 
    
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
        $user = new User(['scenario'=>'registration']);
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        if ($user->save()) {

            $auth = \Yii::$app->authManager;
            $authorRole = $auth->getRole('นักศึกษา');
            $auth->assign($authorRole, $user->getId());

            return $user;
        }
    }

    return null;
    }
}
