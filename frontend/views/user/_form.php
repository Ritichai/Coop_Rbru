<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

      <?php $form = ActiveForm::begin(); ?>
   <br>
    <div class="row">
      <div class="col-lg-3">
          <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
      </div>
      <div class="col-lg-3">
        <?= $form->field($model, 'confirm_password')->passwordInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="row">
<!--        <div class="col-lg-6">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>-->
    </div>
    
    
   <br>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
