<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faculty */

$this->title = 'แก้ไขชื่อคณะ';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faculties'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_faculty, 'url' => ['view', 'id' => $model->id_faculty]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="faculty-update">

    <div class="col-lg-6">
        <br>    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>


</div>
