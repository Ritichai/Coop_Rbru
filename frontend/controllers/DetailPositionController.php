<?php

namespace frontend\controllers;

use Yii;
use common\models\DetailPosition;
use common\models\DetailPositionSearch;
use common\models\SubPosition;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailPositionController implements the CRUD actions for DetailPosition model.
 */
class DetailPositionController extends Controller
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
     * Lists all DetailPosition models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new DetailPositionSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        $doc = \common\models\Doc01::findOne(Yii::$app->user->getId()); //PK ของ doc01 ที่เท่ากับ id ของผู้ที่ทำการ login

        if (!empty($doc)) {
            return $this->render('index', ['searchModel' => $searchModel, 'dataProvider' => $dataProvider,]);
        } else {
            return $this->redirect(['doc01/create']);
        }
    }

    /**
     * Displays a single DetailPosition model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    

    

    public function actionCreate()
    {
        $model = new DetailPosition();
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_detail_position]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    
    
    
    
    public function actionCreate2($id) {
        
        $model = $this->findModel($id);
        $SubPosition = new SubPosition();

        if ($SubPosition->save($SubPosition->ID_detail_positions)) {
            $SubPosition->ID_detail_positions = $model->ID_detail_position;
            $model->save();
            $SubPosition->save();
            
            Yii::$app->getSession()->setFlash('alert',[
                'body'=>'ระบบได้ทำการบันทึกตำแหน่งงานที่คุณเลือกไว้เรียบร้อยเเล้ว',
                'options'=>['class'=>'alert-success']
            ]);
            
            return $this->redirect(['index']);
        }
    }

     
   /**
     * Updates an existing DetailPosition model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_detail_position]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DetailPosition model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailPosition model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DetailPosition the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DetailPosition::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
