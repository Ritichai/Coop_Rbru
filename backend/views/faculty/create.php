<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Faculty */

$this->title = Yii::t('app', 'เพื่มคณะ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faculties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-create">

    <br>
<div class="col-lg-6">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</div>
