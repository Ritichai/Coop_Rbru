<?php

namespace backend\controllers;

use yii\web\Controller;
use common\widgets\report\PDFReport;

use common\models\DetailPosition;
use backend\models\DetailPositionReport;

use common\models\Company;
use backend\models\CompanynameReport;


use common\models\SubCompany;
use backend\models\SubcompanyReport;


use common\models\SubPosition;
use backend\models\SubpositionReport;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class ReportController extends Controller


{
    
    
       public function behaviors()
    {
        return [
            'access'=>[
              'class'=>AccessControl::className(),
              'rules'=>[
                 [
                  'allow'=>true,
                
                  'roles'=>['เจ้าหน้าที่']
                ]
              ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    
    
    
    
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    
      public function actionDetailPosition(){
        
        $request = \Yii::$app->request;
        
        if (!empty($request->get('format')) && $request->get('format') == 'pdf') {
        
            if(!empty(\Yii::$app->session->has('DetailPositionReport'))){
                $detailpositions = \Yii::$app->session->get('DetailPositionReport')->all();
            } else {
                $detailpositions = DetailPosition::find()->orderBy('ID_detail_position DESC')->all();
            }

            $items['setting'] = array(
                'title' => 'รายชื่อสถานประกอบการและตำแหน่งงานที่เปิดรับ', 
            );

            $items['items'] = array();
            foreach ($detailpositions as $key => $detailposition) {
                $items['items'][$detailposition->ID_detail_position] = array(
                    
                    $key+1,
                    $detailposition->namecompany->Name_Company,
                    $detailposition->ttl_position->title_positioncol,
                    $detailposition->name_position,
                    $detailposition->Num_student,
                    
                    
                  
                );
            }

            $items['header'] = array(
                // array($label,$type,$width,$align,$sub),
                
                array('ลำดับ','text',10,'L',''),
                array('ชื่อสถานประกอบการ','text',94,'L',''),
                array('ประเภทตำแหน่ง','text',50,'L',''),
                array('ชื่อตำแหน่ง','text',94,'L',''),
                array('จำนวน','text',20,'R',' คน'),
                
                
                
            );

            // รูปแบบ P ตั้ง | L นอน
            (new PDFReport('L'))->table('detail-position-lists.pdf', $items);
            
        } else {
            
            $model = new DetailPosition();
            $searchModel = new DetailPositionReport();

            if (\Yii::$app->request->isPost) {
                $dataProvider = $searchModel->search(\Yii::$app->request->post());
            } else {
                $dataProvider = $searchModel->search();
            }

            return $this->render('detail-position/search', [
                'model' => $model,
                'search' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
            
        }
        
    }   
    
      public function actionCompanyName(){
        
        $request = \Yii::$app->request;
        
        if (!empty($request->get('format')) && $request->get('format') == 'pdf') {
        
            if(!empty(\Yii::$app->session->has('CompanynameReport'))){
                $detailpositions = \Yii::$app->session->get('CompanynameReport')->all();
            } else {
                $detailpositions = \common\models\Company::find()->orderBy('ID_Company DESC')->all();
            }

            $items['setting'] = array(
                'title' => 'รายชื่อสถานประกอบการ', 
            );

            $items['items'] = array();
            foreach ($detailpositions as $key => $detailposition) {
                $items['items'][$detailposition->ID_Company] = array(
                    
                    $key+1,      
                    $detailposition->Name_Company,
                    
                    
                  
                );
            }

            $items['header'] = array(
                // array($label,$type,$width,$align,$sub),
                
                array('ลำดับ','text',20,'L',''),               
                array('ชื่อสถานประกอบการ','text',160,'L',''),
             
                
            );

            // รูปแบบ P ตั้ง | L นอน
            (new PDFReport('P'))->table('company-name-lists.pdf', $items);
            
        } else {
            
            $model = new company();
            $searchModel = new CompanynameReport();

            if (\Yii::$app->request->isPost) {
                $dataProvider = $searchModel->search(\Yii::$app->request->post());
            } else {
                $dataProvider = $searchModel->search();
            }

            return $this->render('company-name/search', [
                'model' => $model,
                'search' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
            
        }
        
    }
  
      public function actionSubCompany(){
        
        $request = \Yii::$app->request;
        
        if (!empty($request->get('format')) && $request->get('format') == 'pdf') {
        
            if(!empty(\Yii::$app->session->has('SubCompanyReport'))){
                $subCompanys = \Yii::$app->session->get('SubCompanyReport')->all();
            } else {
                $subCompanys = SubCompany::find()->orderBy('created_by DESC')->all();
            }

            $items['setting'] = array(
                'title' => 'สถานประกอบการที่นักศึกษาเลือก', 
            );

            $items['items'] = array();
            foreach ($subCompanys as $key => $subCompany) {
                $items['items'][$subCompany->created_by] = array(
                    
                    $key+1,                   
                    $subCompany->doc01->Fname_th.' '.$subCompany->doc01->Lname_th,
                    $subCompany->namecompany->Name_Company,
                    
                    
                  
                );
            }

            $items['header'] = array(
                // array($label,$type,$width,$align,$sub),
                
                array('ลำดับ','text',10,'L',''),
                array('ชื่อ-สกุล','text',30,'L',''),              
                array('ชื่อสถานประกอบการ','text',140,'L',''),

            );

            // รูปแบบ P ตั้ง | L นอน
            (new PDFReport('P'))->table('sub-company-lists.pdf', $items);
            
        } else {
            
            $model = new SubCompany();
            $searchModel = new SubcompanyReport();

            if (\Yii::$app->request->isPost) {
                $dataProvider = $searchModel->search(\Yii::$app->request->post());
            } else {
                $dataProvider = $searchModel->search();
            }

            return $this->render('sub-company/search', [
                'model' => $model,
                'search' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
            
        }
        
    }   
    
   
    
    
    
    
    
    
    public function actionSubPosition(){
        
        $request = \Yii::$app->request;
        
        if (!empty($request->get('format')) && $request->get('format') == 'pdf') {
        
            if(!empty(\Yii::$app->session->has('SubpositionReport'))){
                $subPositions = \Yii::$app->session->get('SubpositionReport')->all();
            } else {
                $subPositions = SubPosition::find()->orderBy('ID_sub DESC')->all();
            }

            $items['setting'] = array(
                'title' => 'ตำแหน่งงานที่นักศึกษาเลือก', 
            );

            $items['items'] = array();
            foreach ($subPositions as $key => $subPosition) {
                $items['items'][$subPosition->ID_sub] = array(
                    $key + 1,
                    $subPosition->user->Fname_th.' '.$subPosition->user->Lname_th,
                    $subPosition->detailposition->fac->name_faculty,
                    $subPosition->detailposition->namecompany->Name_Company,
                    $subPosition->detailposition->name_position,
                    $subPosition->status,
                );
            }

            $items['header'] = array(
                // array($label,$type,$width,$align,$sub),
                array('ลำดับ','text',10,'C',''),
                array('ชื่อ','text',35,'L',''),
                array('คณะ','text',43,'L',''),
                array('สถานประกอบการ','text',80,'L',''),
                array('ตำแหน่ง','text',75,'L',''),
                array('สถานนะ','text',25,'L',''),
                
                
            );

            // รูปแบบ P ตั้ง | L นอน
            (new PDFReport('L'))->table('sub-position-lists.pdf', $items);
            
       } else {
            
            $model = new SubPosition();
            $searchModel = new SubpositionReport();

            if (\Yii::$app->request->isPost) {
                $dataProvider = $searchModel->search(\Yii::$app->request->post());
            } else {
                $dataProvider = $searchModel->search();
            }

            return $this->render('sub-position/search', [
                'model' => $model,
                'search' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
