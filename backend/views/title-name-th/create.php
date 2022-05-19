<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TitleNameTh */

$this->title = Yii::t('app', 'Create Title Name Th');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Title Name Ths'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-name-th-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
