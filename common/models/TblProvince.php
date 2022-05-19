<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%tbl_province}}".
 *
 * @property integer $PROVINCE_ID
 * @property string $PROVINCE_NAME
 * @property integer $GEO_ID
 */
class TblProvince extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_province}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PROVINCE_NAME'], 'required'],
            [['GEO_ID'], 'integer'],
            [['PROVINCE_NAME'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PROVINCE_ID' => 'Province  ID',
            'PROVINCE_NAME' => 'Province  Name',
            'GEO_ID' => 'Geo  ID',
        ];
    }
    
    public function getGeo()
    {
        return $this->hasOne(TblGeography::className(),['GEO_ID'=>'GEO_ID']);
    }
    
    public function getnaemgeo()
    {
        $list = TblGeography::find()->orderBy('GEO_ID')->all();
        return ArrayHelper::map($list,'GEO_ID', 'GEO_NAME');
    }
    
}
