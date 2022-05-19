<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = 'เพื่มสาขาวิชา';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'สาขาวิชา'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
