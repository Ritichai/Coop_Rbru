<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = 'Update Detail Position: ' . $model->ID_detail_position;
$this->params['breadcrumbs'][] = ['label' => 'Detail Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_detail_position, 'url' => ['view', 'id' => $model->ID_detail_position]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-position-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
