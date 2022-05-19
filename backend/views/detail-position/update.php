<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = Yii::t('app', 'แก้ไขข้อมูลตำแหน่งงาน : ', [
    
]) . $model->name_position;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detail Positions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_detail_position, 'url' => ['view', 'id' => $model->ID_detail_position]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<br>
<div class="detail-position-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
