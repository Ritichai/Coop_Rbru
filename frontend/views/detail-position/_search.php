<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPositionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-position-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    
    
<div class="panel panel-default">
  <div class="panel-heading">ค้นหาข้อมูล</div>
  <div class="panel-body">
      <div class="row">
          <div class="col-lg-6"> <?=
    $form->field($model, 'ID_company')->widget(kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(common\models\Company::find()->all(), 'ID_Company', 'Name_Company'),
        'options' => ['placeholder' => 'เลือกสถานประกอบการ'],
        'disabled' => FALSE,
        'pluginOptions' => ['allowClear' => true]
    ])
    ?> </div>
          <div class="col-lg-6"> <?=
    $form->field($model, 'ID_ttl_position')->widget(kartik\select2\Select2::className(), [
        'data' => \yii\helpers\ArrayHelper::map(common\models\TitlePosition::find()->all(), 'idtitle_position', 'title_positioncol'),
        'options' => ['placeholder' => 'เลือกประเภทตำแหน่งงาน'],
        'disabled' => FALSE,
        'pluginOptions' => ['allowClear' => true]
    ])
    ?> </div>
          
          
          
          
      </div>
          <?= Html::submitButton('ค้นหา', ['class' => 'btn btn-primary']) ?>
  </div>
</div>
    
    
    
    
    
    
     
   
   

    

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'ID_fac') ?>

    <?php // echo $form->field($model, 'Detail') ?>

   

    <?php ActiveForm::end(); ?>

</div>
