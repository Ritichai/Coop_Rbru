<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $id_faculty
 * @property string $name_faculty
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['name_faculty'], 'required'],
            [['name_faculty'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_faculty' => 'รหัสคณะ',
            'name_faculty' => 'ชื่อคณะ',
        ];
    }
}
