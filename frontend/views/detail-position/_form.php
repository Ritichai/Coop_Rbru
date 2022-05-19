<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-position-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_company')->textInput() ?>

    <?= $form->field($model, 'ID_ttl_position')->textInput() ?>

    <?= $form->field($model, 'name_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Num_student')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'ID_fac')->textInput() ?>

    <?= $form->field($model, 'Detail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
