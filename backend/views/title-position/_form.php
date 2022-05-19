<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TitlePosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="title-position-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_positioncol')->textInput(['maxlength' => true]) ?>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
