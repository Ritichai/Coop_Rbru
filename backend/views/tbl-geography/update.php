<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblGeography */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tbl Geography',
]) . $model->GEO_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Geographies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GEO_ID, 'url' => ['view', 'id' => $model->GEO_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-geography-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
