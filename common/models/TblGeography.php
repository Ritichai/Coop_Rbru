<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_geography}}".
 *
 * @property integer $GEO_ID
 * @property string $GEO_NAME
 */
class TblGeography extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_geography}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GEO_NAME'], 'required'],
            [['GEO_NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GEO_ID' => Yii::t('app', 'รหัสภูมิภาค'),
            'GEO_NAME' => Yii::t('app', 'ภูมิภาค'),
        ];
    }
}
