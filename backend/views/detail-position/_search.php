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

    <?= $form->field($model, 'ID_detail_position') ?>

    <?= $form->field($model, 'ID_company') ?>

    <?= $form->field($model, 'ID_ttl_position') ?>

    <?= $form->field($model, 'name_position') ?>

    <?= $form->field($model, 'Num_student') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'ID_fac') ?>

    <?php // echo $form->field($model, 'Detail') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
