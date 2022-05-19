<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สถานประกอบการที่เปิดนักศึกษาสหกิจศึกษา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'ID_Company',
            'Name_Company',
          
                        [
    'attribute'=> 'ID_province',
    'value'=>'province.PROVINCE_NAME',
    'filter'=>  Html::activeDropDownList($searchModel,'ID_province',
 yii\helpers\ArrayHelper::map(\common\models\Province::find()->asArray()->all(),'PROVINCE_ID','PROVINCE_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกจังหวัด']),

],
            'Detail_address',
            'Tell',
            //'ID_amphur',
            // 'ID_district',

//                 [
//              'class' => 'yii\grid\ActionColumn',
//              'options'=>['style'=>'width:Full;'],
//              'buttonOptions'=>['class'=>'btn btn-default'],
//              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"'
//                   . '> {view}  </div>'
//           ]
        ],
    ]); ?>
</div>
