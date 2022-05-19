<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = ' ';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายละเอียดตำแหน่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="detail-position-view">
        
    <h1><?= $model->name_position;?></h1>
<br>
    <p>
        <?= Html::a(Yii::t('app', 'แก้ไขข้อมูล'), ['update', 'id' => $model->ID_detail_position], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'ลบตำแหน่งงาน'), ['delete', 'id' => $model->ID_detail_position], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
 <br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_detail_position',
            'namecompany.Name_Company',            
            'ttl_position.title_positioncol',
            'name_position',
            'Num_student',
            'time:date',
            'fac.name_faculty',
            'Detail',         
        ],
    ]) ?>

</div>
