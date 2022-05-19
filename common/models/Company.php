<?php

namespace common\models;

use Yii;
use common\models\Province;
use common\models\Amphur;
use common\models\District;

/**
 * This is the model class for table "company".
 *
  * @property integer $ID_Company
 * @property string $Name_Company
 * @property string $Detail_address
 * @property integer $ID_province
 * @property integer $ID_amphur
 * @property integer $ID_district
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
      return [
            [['Name_Company', 'ID_province', 'ID_amphur', 'ID_district'], 'required'],
            [['ID_province', 'ID_amphur', 'ID_district','Tell'], 'integer'],
            [['Name_Company', 'Detail_address'], 'string', 'max' => 100],
            
            [['company_web'], 'string', 'max' => 500],
          
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_Company' => 'รหัสสถานประกอบการ',
            'Name_Company' => 'ชื่อสถานประกอบการ',
            'Detail_address' => 'รายละเอียดที่อยู่',
            'ID_province' => 'จังหวัด',
            'ID_amphur' => 'อำเภอ',
            'ID_district' => 'ตำบล',
            'company_web'=>'ข้อมูลเพื่มเติม',
            'Tell'=> 'เบอร์โทรติดต่อ',
            'Toolsa'=>'เครื่องมือ'
        ];
    }
    
      public function getProvince()
    {
        return $this->hasOne(Province::className(),['PROVINCE_ID'=>'ID_province']);
    }
    
    public function getAmphur()
    {
        return $this->hasOne(Amphur::className(),['AMPHUR_ID'=>'ID_amphur']);
    }
    
    public function getDistrict()
    {
        return $this->hasOne(District::className(),['DISTRICT_ID'=>'ID_district']);
    }
}
