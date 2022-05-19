<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TitleNameEn */

$this->title = Yii::t('app', 'Create Title Name En');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Title Name Ens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-name-en-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
