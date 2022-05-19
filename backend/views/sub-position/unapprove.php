<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SubPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ตำแหน่งงานที่รอการอนุมัติ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-position-index">

    <br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID_sub',
            'user.Fname_th',
            'user.Lname_th',
            'detailposition.fac.name_faculty',
             'detailposition.name_position',
//            'updated_by',
            
//            'updated_at',
//            [
//            'attribute' => 'Sub_day',
//            'value' => 'created_at',
//        ],
            
   [
            'attribute' => 'status_posi',
            'value' => 'status',
        ],
            
            
           [
            'attribute' => 'created_at',
            'value' => 'created_at',
             
            'format' => ['date', 'php:Y-m-d'],
            'filter' => DateRangePicker::widget([
                'model' => $searchModel,
                'attribute' => 'created_at',
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
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> '
                . '{view} {update} {delete} </div>'
           ],
        ],
    ]); ?>
    
</div>
