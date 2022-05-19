<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เพิ่มสาขาวิชา');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'สร้าง'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_department',
           
            
            
                         [
    'attribute'=> 'id_faculty_pk',
    'value'=>'fac.name_faculty',
    'filter'=>  Html::activeDropDownList($searchModel,'id_faculty_pk',
 yii\helpers\ArrayHelper::map(\common\models\Faculty::find()->asArray()->all(),'id_faculty','name_faculty'),
        ['class'=>'form-control','prompt'=>'เลือกคณะ']),

],
            'name_department', 
           

                [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
           ],
        ],
    ]); ?>
</div>
