<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "year_in_school".
 *
 * @property integer $id_year
 * @property integer $num_year
 *
 * @property CoopDoc01[] $coopDoc01s
 */
class YearInSchool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'year_in_school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_year'], 'required'],
            [['num_year'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_year' => 'Id Year',
            'num_year' => 'Num Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s()
    {
        return $this->hasMany(CoopDoc01::className(), ['year_in_school_id_year' => 'id_year']);
    }
}
