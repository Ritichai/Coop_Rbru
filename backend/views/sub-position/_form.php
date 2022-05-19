<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SubPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-position-form">

    <?php $form = ActiveForm::begin(); ?>
<br><br><br>
  
    <?= $form->field($model, 'status')->dropDownList([ 'รอการอนุมัติ' => 'รอการอนุมัติ', 'ได้รับการอนุมัติ' => 'ได้รับการอนุมัติ', ], ['prompt' => '']) ?>     

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
