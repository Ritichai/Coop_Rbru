<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property integer $Id_semester
 * @property integer $name_semester
 *
 * @property CoopDoc01[] $coopDoc01s
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_semester'], 'required'],
            [['name_semester'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_semester' => 'Id Semester',
            'name_semester' => 'Name Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s()
    {
        return $this->hasMany(CoopDoc01::className(), ['semester_Id_semester' => 'Id_semester']);
    }
}
