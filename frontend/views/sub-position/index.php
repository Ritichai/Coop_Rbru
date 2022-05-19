<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ตำแหน่งงานที่เลือกและรอการอนุมัติ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-position-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ID_sub',
            'user.Fname_th',
            'user.Lname_th',  
            'detailposition.fac.name_faculty',
            'detailposition.namecompany.Name_Company',
            'detailposition.name_position',
            

            [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> '
                . '{delete}</div>'
           ],
        ],
    ]); ?>
</div>
