<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detail_position".
 *
 * @property integer $ID_detail_position
 * @property integer $ID_company
 * @property integer $ID_ttl_position
 * @property integer $ID_name_position
 * @property integer $Num_student
 * @property string $time
 * @property integer $ID_fac
 * @property string $Detail
 */
class DetailPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_company', 'ID_ttl_position', 'Num_student', 'ID_fac','time','name_position'], 'required'],
            [['ID_company', 'ID_ttl_position', 'Num_student', 'ID_fac'], 'integer'],
            [['time'], 'safe'],
            [['name_position'], 'string', 'max' => 100],
            [['Detail'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
         return [
            'ID_detail_position' => 'รหัสใบประกาศตำแหน่งงาน',
            'ID_company' => 'ชื่อสถานประกอบการ',
            'ID_ttl_position' => 'งานด้าน',
            'name_position' => 'ชื่อตำแหน่งงาน',
            'Num_student' => 'จำนวนที่เปิดรับ',
            'time' => 'วันที่ประกาศ',
            'ID_fac' => 'รับคณะ',
            'Detail' => 'รายละเอียดอื่นๆ',
            'fac.name_faculty'=>'คณะที่เปิดรับ'
        ];
    }
    
     public function getNamecompany()
    {
        return $this->hasOne(Company::className(),['ID_Company'=>'ID_company']);
    }
    
    public function getttl_position()
    {
        return $this->hasOne(TitlePosition::className(),['idtitle_position'=>'ID_ttl_position']);
    }
    
    public function getName_position()
    {
        return $this->hasOne(NamePosition::className(),['idname_position'=>'ID_name_position']);
    }
    
    public function getfac()
    {
        return $this->hasOne(Faculty::className(),['id_faculty'=>'ID_fac']);
    }
    
}
