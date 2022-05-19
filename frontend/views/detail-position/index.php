<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\daterange\DateRangePicker;
use common\models\Company;
/* @var $this yii\web\View */
/* @var $searchModel common\models\DetailPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายละเอียดตำแหน่งงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-position-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    
    <?php if (Yii::$app->session->hasFlash('alert')): ?>
        <?=
        \yii\bootstrap\Alert::widget([
            'body' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
            'options' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
        ])
        ?>
    <?php endif; ?>
    
    <br>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

               
                  [
            'attribute' => 'time',
            'value' => 'time',
             
            'format' => ['date', 'php:Y-m-d'],
            'filter' => DateRangePicker::widget([
                'model' => $searchModel,
                'attribute' => 'time',
                'useWithAddon' => true,
                'convertFormat' => true,
                'language' => 'th',
                'hideInput' => 1,
                'pluginOptions' => [
                    'locale'=>[
                        'format'=>'Y-m-d',
                        'separator'=>'&'],
                    'opens'=>'right'
                    ]
                
            ]),
        ],
            
                        
                                    [
    'attribute'=> 'ID_fac',
    'value'=>'fac.name_faculty',
    'filter'=>  Html::activeDropDownList($searchModel,'ID_fac',
 yii\helpers\ArrayHelper::map(\common\models\Faculty::find()->asArray()->all(),'id_faculty','name_faculty'),
        ['class'=>'form-control','prompt'=>'เลือกสาขาที่เรียน']),

],
      
            
//             [
//            'attribute' => 'ID_company',
//            'value' => 'namecompany.Name_Company',
//        ],
            
                        [
            'attribute' => 'ID_company',
            'value' => 'namecompany.Name_Company',
            'filter' => Html::activeDropDownList($searchModel, 'ID_company', yii\helpers\ArrayHelper::map(Company::find()->asArray()->all(), 
            'ID_Company', 'Name_Company'), ['class' => 'form-control', 'prompt' => 'ค้นหาสถานประกอบการ..']),
        ],
          
//               [
//            'attribute' => 'ID_ttl_position',
//            'value' => 'ttl_position.title_positioncol',
//        ],
//            
                             [
            'attribute' => 'ID_ttl_position',
            'value' => 'ttl_position.title_positioncol',
            'filter' => Html::activeDropDownList($searchModel, 'ID_ttl_position', yii\helpers\ArrayHelper::map(\common\models\TitlePosition::find()->asArray()->all(), 
            'idtitle_position', 'title_positioncol'), ['class' => 'form-control', 'prompt' => 'ค้นหาประเภทงาน..']),
        ],
            
            
            
          //  'ID_detail_position',
          //  'ID_company',
          //  'ID_ttl_position',
            
            
            'name_position',
            'Num_student',
            
           
     
     
            // 'Detail',

               [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:Full;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"'
                   . '> {view}  </div>'
           ]
        ],
    ]); ?>
</div>
