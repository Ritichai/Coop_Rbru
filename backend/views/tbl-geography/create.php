<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblGeography */

$this->title = Yii::t('app', 'Create Tbl Geography');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Geographies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-geography-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
