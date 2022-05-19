<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\TblGeography;
use common\models\TblProvince;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TblProvinceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tbl Provinces');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-province-index">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a(Yii::t('app', 'Create Tbl Province'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

     
            
            [
    'attribute'=> 'GEO_ID',
    'value'=>'geo.GEO_NAME',
    'filter'=>Html::activeDropDownList($searchModel,'GEO_ID',
        ArrayHelper::map(TblGeography::find()->asArray()->all(),'GEO_ID','GEO_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกภูมิภาค']),

],
       [
    'attribute'=> 'PROVINCE_NAME',
    'value'=>'PROVINCE_NAME',
    'filter'=>Html::activeDropDownList($searchModel,'PROVINCE_ID',
        ArrayHelper::map(TblProvince::find()->asArray()->all(),'PROVINCE_ID','PROVINCE_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกจังหวัด']),

],
            
            
            

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
