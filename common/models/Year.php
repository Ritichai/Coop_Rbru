<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "year".
 *
 * @property integer $Id_year
 * @property integer $Num_year
 *
 * @property CoopDoc01[] $coopDoc01s
 */
class Year extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Num_year'], 'required'],
            [['Num_year'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_year' => 'Id Year',
            'Num_year' => 'Num Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s()
    {
        return $this->hasMany(CoopDoc01::className(), ['year_Id_year' => 'Id_year']);
    }
}
