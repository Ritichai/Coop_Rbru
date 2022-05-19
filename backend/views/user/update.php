<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title ='แก้ไขข้อมูลผู้ใช้งาน'.' '.$model->username;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'เพิ่ม / แก้ไข / ลบ บัญชีผู้ใช้งาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไขข้อมูล');
?>
<div class="user-update">

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
