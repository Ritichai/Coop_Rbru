<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "title_name_th".
 *
 * @property integer $id_title_name_th
 * @property string $name_title_name_th
 */
class TitleNameTh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title_name_th';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_title_name_th'], 'required'],
            [['name_title_name_th'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_title_name_th' => 'Id Title Name Th',
            'name_title_name_th' => 'Name Title Name Th',
        ];
    }
}
