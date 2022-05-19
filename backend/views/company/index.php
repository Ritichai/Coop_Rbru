<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Province;
use common\models\Amphur;
use common\models\District;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ข้อมูลสถานประกอบการ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">

    <br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'สร้าง'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          // 'ID_Company',
            'Name_Company',
       //     'Detail_address',
            
             [
    'attribute'=> 'ID_province',
    'value'=>'province.PROVINCE_NAME',
    'filter'=>  Html::activeDropDownList($searchModel,'ID_province',
    ArrayHelper::map(Province::find()->asArray()->all(),'PROVINCE_ID','PROVINCE_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกจังหวัด']),

],
            
            
                         [
    'attribute'=> 'ID_amphur',
    'value'=>'amphur.AMPHUR_NAME',
    'filter'=>  Html::activeDropDownList($searchModel,'ID_amphur',
    ArrayHelper::map(Amphur::find()->asArray()->all(),'AMPHUR_ID','AMPHUR_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกจังหวัด']),

],
    
            
                         [
    'attribute'=> 'ID_district',
    'value'=>'district.DISTRICT_NAME',
    'filter'=>  Html::activeDropDownList($searchModel,'ID_district',
    ArrayHelper::map(District::find()->asArray()->all(),'DISTRICT_ID','DISTRICT_NAME'),
        ['class'=>'form-control','prompt'=>'เลือกจังหวัด']),

],
    
           
            
            
            
            
           // 'ID_amphur',
           // 'ID_district',

             [
              
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
           ],
            
        ],
    ]); ?>
    
    
</div>
