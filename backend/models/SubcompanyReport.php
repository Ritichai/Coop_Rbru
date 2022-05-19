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

use common\models\SubCompany;


class SubcompanyReport extends Model {
    
    
    public $created_by;
    public $faculty_name;
    public $ID_Company;
    public $created_at;
    public $time_start;
    public $time_end;
    
    
     public function rules(){
        return [
            [['created_by', 'ID_Company','time_start','time_end','created_at'], 'safe'],
        ]; 
    }
    
    public function attributeLabels(){
        return [
            'created_by' => 'ชื่อ',
           
            'ID_Company' => 'สถานประกอบการ',
        ];
    } 
    
      public function search($params = array()){
        
        $model = SubCompany::find()->orderBy('created_by ASC');
        $this->load($params);
        
        // การค้นหา product_id, product_status, product_name
        $model->andFilterWhere([ 
            'created_by' => $this->created_by,       
            'ID_Company' => $this->ID_Company,
        ]);
        
       if (!empty($this->time_start) && !empty($this->time_end)){
            $model->andFilterWhere(['>=', 'created_at', $this->time_start])
                ->andFilterWhere(['<=', 'created_at', $this->time_end]);
        } else if (!empty($this->time_start) && empty($this->time_end)){
            $model->andFilterWhere(['=', 'created_at', $this->time_start]);
        }
        
        // สำหรับออกรายงาน (เก็บข้อมูลการค้นหา)
        Yii::$app->session->remove('SubCompanyReport');
        Yii::$app->session->set('SubCompanyReport', $model);
        
        return new ActiveDataProvider(['query' => $model]);
        
    }
    
    
}
