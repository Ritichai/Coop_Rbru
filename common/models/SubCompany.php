<?php

namespace common\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use Yii;

/**
 * This is the model class for table "sub_company".
 *
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $ID_Company
 */
class SubCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          
            [['created_by', 'updated_by', 'created_at', 'updated_at', 'ID_Company'], 'integer'],
            
        ];
    }
    
    
      
        public function behaviors()
    {
        return [
            BlameableBehavior::className(),
            TimestampBehavior::className(),
        ];
    }
    

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'created_by' => 'ระบุโดย',
            'updated_by' => 'Updated By',
            'created_at' => 'ระบุเมื่อ',
            'updated_at' => 'Updated At',
            'ID_Company' => 'ชื่อสถานประกอบการที่ปฏิบัติงาน',
            'doc01.Fname_th'=>'ชื่อ',
            'namecompany.Name_Company'=>'ชื่อสถานประกอบการ',
            'doc01.facultyIdFaculty.name_faculty'=>'คณะ'
        ];
    }
    
    
    
       public function getNamecompany()
    {
        return $this->hasOne(Company::className(),['ID_Company'=>'ID_Company']);
    }
    
         public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
    
            public function getDoc01()
    {
        return $this->hasOne(Doc01::className(), ['Id_doc_01' => 'created_by']);
    }
    
}
