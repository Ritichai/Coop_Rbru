<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "title_name_en".
 *
 * @property integer $id_title_name_en
 * @property string $nametitle_name_en
 */
class TitleNameEn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title_name_en';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nametitle_name_en'], 'required'],
            [['nametitle_name_en'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_title_name_en' => 'Id Title Name En',
            'nametitle_name_en' => 'Nametitle Name En',
        ];
    }
}
