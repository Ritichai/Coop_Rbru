<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubPosition */

$this->title = 'ตำแหน่งงานของ'.' '.$model->user->titleNameTh->name_title_name_th.
                         ' '.$model->user->Fname_th.
                         ' '.$model->user->Lname_th.' '.'ขณะนี้'.' '.$model->status;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ตำแหน่งงานที่นักศึกษาเลือก'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>$model->user->titleNameTh->name_title_name_th.
                         ' '.$model->user->Fname_th.
                         ' '.$model->user->Lname_th, 'url' => ['view', 'id' => $model->ID_sub]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไข');
?>
<div class="sub-position-update">

    
    
     <div class="row">
        <div class="col-lg-6">
         <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>


  

</div>
