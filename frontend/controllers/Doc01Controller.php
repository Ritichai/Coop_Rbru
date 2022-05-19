<?php

namespace frontend\controllers;

use Yii;
use common\models\Doc01;
use common\models\Doc01Search;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Province;
use common\models\Amphur;
use common\models\District;
use common\models\Faculty;
use common\models\Department;



/**
 * Doc01Controller implements the CRUD actions for Doc01 model.
 */
class Doc01Controller extends Controller
{
    /**
     * @inheritdoc
     */
    
      public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
 

    /**
     * Lists all Doc01 models.
     * @return mixed
     */
    
    
//  public function actionIndex()
//    {
//        $searchModel = new Doc01Search();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

        public function actionIndex()
    {
        return $this->redirect(['view', 'id' => \Yii::$app->user->getId()]);
    }

    /**
     * Displays a single Doc01 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
  return $this->render('view', [ 'model' => $this->findModel($id),]);

    }

    /**
     * Creates a new Doc01 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Doc01();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id_doc_01]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Doc01 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $amphur  = ArrayHelper::map($this->getAmphur($model->province_PROVINCE_ID),'id','name');
        $district =  ArrayHelper::map($this->getDistrict($model->amphur_AMPHUR_ID),'id','name');
        $amphur1  = ArrayHelper::map($this->getAmphur($model->province_PROVINCE_ID1),'id','name');
        $district1 =  ArrayHelper::map($this->getDistrict($model->amphur_AMPHUR_ID1),'id','name');
        $fac =  ArrayHelper::map($this->getDepartment($model->faculty_id_faculty),'id','name');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Id_doc_01]);
        } else {
            return $this->render('update', [
                
                'model' => $model,
               'amphur'=> $amphur,
            'district' =>$district,
               'amphur1'=> $amphur1,
            'district1' =>$district1,
                'fac' =>$fac

            ]);
        }
    }

    /**
     * Deletes an existing Doc01 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    
    
    
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//        
//    }   
    
    
    
       public function actionGetDepartment() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $province_id = $parents[0];
                $out = $this->getDepartment($province_id);
                echo Json::encode(['output' => $out, 'selected' => '']);
                return;
            }
        }
        echo Json::encode(['output' => '', 'selected' => '']);
    }
    

    public function actionGetAmphur() {
     $out = [];
     if (isset($_POST['depdrop_parents'])) {
         $parents = $_POST['depdrop_parents'];
         if ($parents != null) {
             $province_id = $parents[0];
             $out = $this->getAmphur($province_id);
             echo Json::encode(['output'=>$out, 'selected'=>'']);
             return;
         }
     }
     echo Json::encode(['output'=>'', 'selected'=>'']);
 }
 
  public function actionGetDistrict() {
     $out = [];
     if (isset($_POST['depdrop_parents'])) {
         $ids = $_POST['depdrop_parents'];
         $province_id = empty($ids[0]) ? null : $ids[0];
         $amphur_id = empty($ids[1]) ? null : $ids[1];
         if ($province_id != null) {
            $data = $this->getDistrict($amphur_id);
            echo Json::encode(['output'=>$data, 'selected'=>'']);
            return;
         }
     }
     echo Json::encode(['output'=>'', 'selected'=>'']);
 }
 
 
  public function actionGetAmphur1() {
     $out = [];
     if (isset($_POST['depdrop_parents'])) {
         $parents = $_POST['depdrop_parents'];
         if ($parents != null) {
             $province_id = $parents[0];
             $out = $this->getAmphur1($province_id);
             echo Json::encode(['output'=>$out, 'selected'=>'']);
             return;
         }
     }
     echo Json::encode(['output'=>'', 'selected'=>'']);
 }
 
  public function actionGetDistrict1() {
     $out = [];
     if (isset($_POST['depdrop_parents'])) {
         $ids = $_POST['depdrop_parents'];
         $province_id = empty($ids[0]) ? null : $ids[0];
         $amphur_id = empty($ids[1]) ? null : $ids[1];
         if ($province_id != null) {
            $data = $this->getDistrict1($amphur_id);
            echo Json::encode(['output'=>$data, 'selected'=>'']);
            return;
         }
     }
     echo Json::encode(['output'=>'', 'selected'=>'']);
 }
 
 
 
 
 
 
  protected function getAmphur($id){
     $datas = Amphur::find()->where(['PROVINCE_ID'=>$id])->all();
     return $this->MapData($datas,'AMPHUR_ID','AMPHUR_NAME');
 }
 
 protected function getDistrict($id){
     $datas = District::find()->where(['AMPHUR_ID'=>$id])->all();
     return $this->MapData($datas,'DISTRICT_ID','DISTRICT_NAME');
 }
  protected function getAmphur1($id){
     $datas = Amphur::find()->where(['PROVINCE_ID'=>$id])->all();
     return $this->MapData($datas,'AMPHUR_ID','AMPHUR_NAME');
 }
 
 protected function getDistrict1($id){
     $datas = District::find()->where(['AMPHUR_ID'=>$id])->all();
     return $this->MapData($datas,'DISTRICT_ID','DISTRICT_NAME');
 }
 
 
 
 
  protected function getDepartment($id){
     $datas = Department::find()->where(['id_faculty_pk'=>$id])->all();
     return $this->MapData($datas,'id_department','name_department');
 }
 
 
  protected function getuser($id){
     $datas = User::find()->where(['created_at'=>$id])->all();
     return $this->MapData($datas,'id','username');
 }
 
 
  protected function MapData($datas,$fieldId,$fieldName){
     $obj = [];
     foreach ($datas as $key => $value) {
         array_push($obj, ['id'=>$value->{$fieldId},'name'=>$value->{$fieldName}]);
     }
     return $obj;
 }
    
    
    
    

    /**
     * Finds the Doc01 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Doc01 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Doc01::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
