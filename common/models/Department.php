<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $id_department
 * @property string $name_department
 * @property integer $id_faculty_pk
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_department', 'id_faculty_pk'], 'required'],
            [['id_faculty_pk'], 'integer'],
            [['name_department'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_department' => 'รหัสสาขา',
            'name_department' => 'ชื่อสาขา',
            'id_faculty_pk' => 'ชื่อคณะ',
        ];
    }
    
    public function getfac()
    {
        return $this->hasOne(Faculty::className(),['id_faculty'=>'id_faculty_pk']);
    }
    
    public function getfaclist()
    {
        $list = Faculty::find()->orderBy('id_faculty')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_faculty', 'name_faculty');
    }
}
