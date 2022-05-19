<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

//$this->title = Yii::t('app', 'Update {modelClass}: ', [
//    'modelClass' => 'Department',
//]) . $model->id_department;

$this->title = 'แก้ไขชื่อสาขาวิชา';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Departments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_department, 'url' => ['view', 'id' => $model->id_department]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="department-update">

    <div class="col-lg-6">
        <br>
            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>



</div>
