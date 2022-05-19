<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\DetailPosition;

class DetailPositionReport extends Model {
    
    public $ID_detail_position;
    public $ID_company;
    public $ID_ttl_position;
    public $name_position;
    public $Num_student;
    public $time_start;
    public $time_end;




    public function rules(){
        return [
            [['ID_detail_position', 'ID_company','ID_ttl_position',
              'name_position','Num_student','time_start','time_end'], 'safe'],
        ]; 
    }
    
    public function attributeLabels(){
        return [
            'ID_detail_position' => 'รหัสสถานประกอบการ',
            'ID_company' => 'ชื่อสถานประกอบการ',
            'ID_ttl_position' => 'ประเภทตำแหน่งงาน',
            'name_position' => 'ชื่อตำแหน่ง',
            'Num_student' => 'จำนวนที่เปิดรับ',
            'time_start' => 'เปิดรับตั้งแต่',
            'time_end' => 'ถึง',
           
        ];
    } 
    
    public function search($params = array()){
        
        $model = DetailPosition::find()->orderBy('ID_Company ASC');
        $this->load($params);
        
      
        $model->andFilterWhere([ 
            'ID_Company' => $this->ID_company,
            'ID_ttl_position' => $this->ID_ttl_position,
            'name_position' => $this->name_position,
            'Num_student' => $this->Num_student
            
        ]);
        
      
        if (!empty($this->time_start) && !empty($this->time_end)){
            $model->andFilterWhere(['>=', 'time', $this->time_start])
                ->andFilterWhere(['<=', 'time', $this->time_end]);
        } else if (!empty($this->time_start) && empty($this->time_end)){
            $model->andFilterWhere(['=', 'time', $this->time_start]);
        }
        
        
        
        Yii::$app->session->remove('DetailPositionReport');
        Yii::$app->session->set('DetailPositionReport', $model);
        return new ActiveDataProvider(['query' => $model]);
        
    }
            
}