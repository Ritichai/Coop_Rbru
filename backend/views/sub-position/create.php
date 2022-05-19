<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubPosition */

$this->title = Yii::t('app', 'Create Sub Position');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sub Positions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
