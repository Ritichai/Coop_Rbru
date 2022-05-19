<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TitlePosition */

$this->title = $model->title_positioncol;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายการประเภทตำแหน่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="title-position-view">



    <p>
        <?= Html::a(Yii::t('app', 'แก้ไขข้อมูล'), ['update', 'id' => $model->idtitle_position], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'ลบข้อมูล'), ['delete', 'id' => $model->idtitle_position], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'คุณแน่ใจว่าจะลบ ประเภทตำแหน่งงานนี้'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtitle_position',
            'title_positioncol',



        ],
    ]) ?>

</div>
