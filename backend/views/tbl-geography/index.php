<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\TblGeography;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TblGeographySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ภูมิภาค');
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="tbl-geography-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a(Yii::t('app', 'Create Tbl Geography'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'GEO_ID',
           // 'GEO_NAME',
            
            [
    'attribute'=> 'GEO_NAME',
    'value'=>'GEO_NAME',
    'filter'=>Html::activeDropDownList($searchModel,'GEO_ID',
        ArrayHelper::map(TblGeography::find()->asArray()->all(),'GEO_ID','GEO_NAME'),
        ['class'=>'form-control','prompt'=>'ภูมิภาค']),
                
                

],

            
            

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
