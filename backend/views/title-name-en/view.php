<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TitleNameEn */

$this->title = $model->id_title_name_en;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Title Name Ens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-name-en-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_title_name_en], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_title_name_en], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_title_name_en',
            'nametitle_name_en',
        ],
    ]) ?>

</div>
