<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TitleNameEn */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Title Name En',
]) . $model->id_title_name_en;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Title Name Ens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_title_name_en, 'url' => ['view', 'id' => $model->id_title_name_en]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="title-name-en-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
