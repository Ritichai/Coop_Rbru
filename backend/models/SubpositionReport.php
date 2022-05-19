<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\models;

/**
 * Description of Subcompany
 *
 * @author Ritichai
 */


use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SubPosition;





class SubpositionReport extends Model {
    
    public $ID_sub;
    public $created_by;
    public $time_start;
    public $time_end;
    public $status;
    public $ID_detail_positions;
    
    
    
    

    public function rules(){
        return [
            [['ID_sub',
              'created_by',
              'status',
              'ID_detail_positions',
              'time_start',
              'time_end'], 'safe'],
        ]; 
    }
    
    public function attributeLabels(){
        return [
           
              'ID_sub'=>'รหัสใบตำแหน่งงาน',
              'created_by'=>'ชื่อสกุล',
              'status'=>'สถานะ',
              'ID_detail_positions'=>'ชื่อตำแหน่งงาน',
              'time_start'=>'เปิดรับ',
              'time_end'=>'ถึง'
            
           
        ];
    } 
    
     public function search($params = array()){
        
        $model = SubPosition::find()->orderBy('ID_sub ASC');
        $this->load($params);
        $model->andFilterWhere([ 
            'created_by' => $this->created_by,
            'ID_detail_positions' => $this->ID_detail_positions,
        
        ]);
        
        if (!empty($this->status)){
            $model->andFilterWhere(['like', 'status', $this->status]);
        }
        
        if (!empty($this->time_start) && !empty($this->time_end)){
            $model->andFilterWhere(['>=', 'created_at', $this->time_start])
                ->andFilterWhere(['<=', 'created_at', $this->time_end]);
        } else if (!empty($this->time_start) && empty($this->time_end)){
            $model->andFilterWhere(['=', 'created_at', $this->time_start]);
        }

        
        
        
        \Yii::$app->session->remove('SubpositionReport');
        \Yii::$app->session->set('SubpositionReport', $model);
        return new ActiveDataProvider(['query' => $model]);
        
    }

}
