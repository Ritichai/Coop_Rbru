<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */
$this->title ='แก้ไขข้อมูลผู้ใช้งาน'.' '.$model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'เพิ่ม / แก้ไข / ลบ บัญชีผู้ใช้งาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

  
<br>
    <p>
        <?= Html::a(Yii::t('app', 'แก้ไขข้อมูล'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'ลบ'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
      
    
    [  
        'label' => 'ชื่อบัญชีผู้ใช้งาน',
        'value' =>$model->username,
    ],
            
            
      
            'email:email',
          //  'password_hash',
           // 'auth_key',
           // 'confirmed_at',
           // 'unconfirmed_email:email',
           // 'blocked_at',
           // 'registration_ip',
            'created_at:dateTime',
            'updated_at:dateTime',
            //'flags',
            'statusName',
            //'roles',
        ],
    ]) ?>

</div>
