<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title ='เพิ่มบัญชีผู้ใช้งาน';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'เพิ่ม / แก้ไข / ลบ บัญชีผู้ใช้งาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    
    
