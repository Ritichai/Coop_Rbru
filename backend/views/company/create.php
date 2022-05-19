<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = Yii::t('app', 'เพื่อข้อมูลสถานประกอบการ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลสถานประกอบการ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-create">

   <br>
   
   
   <div class="col-lg-8">
       
    <?= $this->render('_form', [
        'model' => $model,
        
//        เพื่มไอ้สองตัวนี้มา
       'amphur'=> [],
        'district' =>[],
    ]) ?>
  </div>


</div>
