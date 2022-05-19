<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubCompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-company-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Company', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Sub Company', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Create Sub Company', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'created_by',
            'updated_by',
            'created_at',
            'updated_at',
            'ID_Company',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
