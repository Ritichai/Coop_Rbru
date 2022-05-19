<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เพิ่มข้อมูลตำแหน่งงาน');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-position-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'สร้าง'), ['create'], ['class' => 'btn btn-success']) ?>
        
         
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ID_detail_position',
            
 
          
            
                  [
            'attribute' => 'ID_company',
            'value' => 'namecompany.Name_Company',
            'filter' => Html::activeDropDownList($searchModel, 'ID_company', yii\helpers\ArrayHelper::map(Company::find()->asArray()->all(), 
            'ID_Company', 'Name_Company'), ['class' => 'form-control', 'prompt' => 'เลือกคณะ']),
        ],
          
            
            
               [
            'attribute' => 'ID_ttl_position',
            'value' => 'ttl_position.title_positioncol',
        ],
    
            'name_position',
            'Num_student',
            'time:date',
            //'ID_fac',
            // 'Detail',

             [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
           ],
        ],
    ]); ?>
</div>
