<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_Company') ?>

    <?= $form->field($model, 'Name_Company') ?>

    <?= $form->field($model, 'Detail_address') ?>

    <?= $form->field($model, 'ID_province') ?>

    <?= $form->field($model, 'ID_amphur') ?>
     <?= $form->field($model, 'Tell') ?>

    <?php // echo $form->field($model, 'ID_district') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
