<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "in_position".
 *
 * @property integer $id_in_position
 * @property string $name_in_positioncol
 *
 * @property CoopDoc01[] $coopDoc01s
 */
class InPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'in_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_in_positioncol'], 'required'],
            [['name_in_positioncol'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_in_position' => 'Id In Position',
            'name_in_positioncol' => 'Name In Positioncol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoopDoc01s()
    {
        return $this->hasMany(CoopDoc01::className(), ['in_position_id' => 'id_in_position']);
    }
}
