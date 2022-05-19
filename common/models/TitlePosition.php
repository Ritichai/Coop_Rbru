<?php

namespace common\models;

use MongoDB\BSON\Type;
use Yii;
use yii\helpers\ArrayHelper;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "title_position".
 *
 * @property integer $idtitle_position
 * @property string $title_positioncol
 *
 * @property DetailPosition[] $detailPositions
 */
class TitlePosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_positioncol'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtitle_position' => Yii::t('app', 'รหัสประเภทตำแหน่งงาน'),
            'title_positioncol' => Yii::t('app', 'ประเภทตำแหน่งงาน'),
        ];
    }





    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPositions()
    {
        return $this->hasMany(DetailPosition::className(), ['title_position_idtitle_position' => 'idtitle_position']);
    }

}
