<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubCompany */

$this->title = 'Update Sub Company: ' . $model->created_by;
$this->params['breadcrumbs'][] = ['label' => 'Sub Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->created_by, 'url' => ['view', 'id' => $model->created_by]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-company-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
