<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Amphur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="amphur-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'AMPHUR_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AMPHUR_NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GEO_ID')->textInput() ?>

    <?= $form->field($model, 'PROVINCE_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
