<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SubPosition */

$this->title = 'ตำแหน่งงานของ'.' '.$model->user->titleNameTh->name_title_name_th.
                         ' '.$model->user->Fname_th.
                         ' '.$model->user->Lname_th.' '.'ขณะนี้'.' '.$model->status;

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ตำแหน่งงานที่นักศึกษาเลือก'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-position-view">

    

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_sub',
            
                [  
        'label' => 'ชื่อนักศึกษา',
        'value' =>$model->user->titleNameTh->name_title_name_th.' '.$model->user->Fname_th.' '.$model->user->Lname_th
    ],
            
    [  
        'label' => 'อนุมัติโดย',
        'value' =>$model->users->username
    ],      
            
      
            'created_at',
          
            'status',
            
            [
            'label' => 'ตำแหน่งงาน',
            'value' => $model->detailposition->name_position . ' ณ ' . $model->detailposition->namecompany->Name_Company,
        ],
    ],
    ]) ?>
    
    
    
    <p>
        <?= Html::a(Yii::t('app', 'แก่ไขสถานะของตำแหน่งงาน'), ['update', 'id' => $model->ID_sub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'ลบ'), ['delete', 'id' => $model->ID_sub], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'คุณแน่ใจหรือไม่ว่าจะลบแหน่งงานของ'.' '
                        . ''.$model->user->titleNameTh->name_title_name_th.
                         ' '.$model->user->Fname_th.
                         ' '.$model->user->Lname_th),
                'method' => 'post',
            ],
        ]) ?>
        
    </p>

</div>
