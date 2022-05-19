<?php

namespace common\models;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "sub_position".
 *
 * @property integer $ID_sub
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $ID_detail_positions
 */
class SubPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_position';
    }

    /**
     * @inheritdoc
     */
    
    
    
     public function rules()
    {
        return [
            
            [['created_by', 'updated_by', 'ID_detail_positions'], 'required'],
            [['created_by', 'updated_by', 'ID_detail_positions'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'string'],
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
            'ID_sub' => 'รหัสใบเลือกตำแหน่งงาน',
            'created_by' => 'เลือกโดย',
            'updated_by' => 'อนุมัติโดย',
            'created_at' => 'เลือกเมื่อ',
            'updated_at' => 'แก้เมื่อ',
            'Sub_day'=>'วันที่เลือกตำแหน่งงาน',
            'status'=>'สถานะ',
            'ID_detail_positions' => 'Id Detail Positions',
            'detailposition.fac.name_faculty'=>'คณะ',
            'status_posi'=>'สถานะ',
            
        ];
    }
    
    public function getDetailposition()
    {
                return $this->hasOne(DetailPosition::className(),
                ['ID_detail_position'=>'ID_detail_positions']);
              
    }
    public function getUser()
    {
                return $this->hasOne(Doc01::className(),
                ['Id_doc_01'=>'created_by']);
              
    }

     public function getUsers()
    {
                return $this->hasOne(User::className(),
                ['id'=>'created_by']);
              
    }
    
    
}
