<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Amphur */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Amphur',
]) . $model->AMPHUR_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Amphurs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AMPHUR_ID, 'url' => ['view', 'id' => $model->AMPHUR_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="amphur-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
