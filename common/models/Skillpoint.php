<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skillpoint".
 *
 * @property integer $id_skillpoint
 * @property string $skillpoint
 *
 * @property CoopDoc01[] $coopDoc01s
 * @property CoopDoc01[] $coopDoc01s0
 * @property CoopDoc01[] $coopDoc01s1
 */
class Skillpoint extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skillpoint';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skillpoint'], 'string', 'max' => 45],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_skillpoint' => 'Id Skillpoint',
            'skillpoint' => 'ความสามารถทางด้านภาษา',
            
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s()
    {
        return $this->hasMany(CoopDoc01::className(), ['skillpoint_en' => 'id_skillpoint']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s0()
    {
        return $this->hasMany(CoopDoc01::className(), ['skillpoint_jp' => 'id_skillpoint']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s1()
    {
        return $this->hasMany(CoopDoc01::className(), ['skillpoint_cn' => 'id_skillpoint']);
    }
}
