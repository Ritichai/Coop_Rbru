<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เพิ่ม / แก้ไข / ลบ บัญชีผู้ใช้งาน');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

     <p>
        <?= Html::a(Yii::t('app', 'สร้างบัญชีผู้ใช้งาน'), ['create'], ['class' => 'btn btn-success']) ?>
         
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

           // 'id',
            'username',
          //  'email:email',
         //   'password_hash',
             // 'auth_key',
            // 'confirmed_at',
            // 'unconfirmed_email:email',
            // 'blocked_at',
            // 'registration_ip',
             'created_at:date',
            // 'updated_at',
            // 'flags',
                [
               'attribute'=>'status',
               'format'=>'html',
               'filter'=>$searchModel->itemStatus,
               'value'=>function($model)
                    {
                 return $model->statusName=='Active'
                 ?'<span class="text-success">'.$model->statusName.'</span>' : $model->statusName ;
               }
             ],
           // 'roles',
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
