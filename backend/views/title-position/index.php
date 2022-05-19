<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\TitlePosition;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TitlePositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'รายการประเภทตำแหน่งงาน');
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="title-position-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <p>
        <?= Html::a(Yii::t('app', 'สร้าง'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


          //  'idtitle_position',


[
    'attribute'=> 'title_positioncol',
    'value'=>'title_positioncol',
    'filter'=>Html::activeDropDownList($searchModel,'idtitle_position',
        ArrayHelper::map(TitlePosition::find()->asArray()->all(),'idtitle_position','title_positioncol'),
        ['class'=>'form-control','prompt'=>'เลือกประเภทตำแหน่งงานที่ต้องการ']),

],

           [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
           ],
        ],

        'options' => [ 'style' => 'margin: 15px;' ],
        'tableOptions' => [ 'class' => 'table table-striped table-bordered' ]

    ]); ?>


    
</div>
