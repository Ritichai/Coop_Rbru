<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = 'Create Detail Position';
$this->params['breadcrumbs'][] = ['label' => 'Detail Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
