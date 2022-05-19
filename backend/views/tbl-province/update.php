<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblProvince */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tbl Province',
]) . $model->PROVINCE_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Provinces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PROVINCE_ID, 'url' => ['view', 'id' => $model->PROVINCE_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
