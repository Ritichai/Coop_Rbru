<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

use common\models\Company;

class CompanynameReport extends Model {
    
    public $ID_Company;
    public $Name_Company;
    
    
    public function rules(){
        return [
            [['ID_Company', 'Name_Company',], 'safe'],
        ]; 
    }
    
    public function attributeLabels(){
        return [
            'ID_Company' => 'รหัสประเภทสินค้า',
            'Name_Company' => 'ชื่อประเภทสินค้า',
           
        ];
    } 
    
    public function search($params = array()){
        
        $model = Company::find()->orderBy('ID_Company ASC');
        $this->load($params);
        
      
        $model->andFilterWhere([ 
            'ID_Company' => $this->ID_Company,
            
        ]);
        
        if (!empty($this->Name_Company)){
            $model->andFilterWhere(['LIKE', 'Name_Company', $this->Name_Company]);
        }
        
        
          Yii::$app->session->remove('CompanynameReport');
        Yii::$app->session->set('CompanynameReport', $model);      
        return new ActiveDataProvider(['query' => $model]);
    }
            
}