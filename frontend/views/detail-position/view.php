<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = $model->namecompany->Name_Company.' เปิดรับตำแหน่ง'.$model->ttl_position->title_positioncol.
        'เกี่ยวกับ '.$model->name_position;
$this->params['breadcrumbs'][] = ['label' => 'รายละเอียดตำแหน่งงาน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="detail-position-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
<br>


<?= DetailView::widget([
        'model' => $model,
        'attributes' => [   
            [  
        'label' => 'ชื่อสถานประกอบการ',
        'value' =>$model->namecompany->Name_Company,
    ],
            [  
        'format'=>'html',
        'label' => 'รายละเอียดที่ตั้ง',
        'value' => 'เลขที่ : '.$model->namecompany->Detail_address.
        '<br>' . 'ตำบล : ' . $model->namecompany->district->DISTRICT_NAME.
        '<br>' . 'อำเภอ : ' . $model->namecompany->amphur->AMPHUR_NAME.
        '<br>' . 'จังหวัด : ' . $model->namecompany->province->PROVINCE_NAME,
        ],
            'namecompany.company_web:url',
            'namecompany.Tell',
        ],
    ]) ?>



    <?= DetailView::widget([
        'model' => $model,
        
        'attributes' => [
//            'ID_detail_position',
                [  
        'label' => 'รหัสตำแหน่งงานตำแหน่งงาน',
        'value' => $model->ID_detail_position,
    ],
          
            'ttl_position.title_positioncol',
            'name_position',
            'Num_student',
            'time:date',
            'fac.name_faculty',
            'Detail',     
        ],
    ]) ?>

</div>
<p>
        <?= Html::a('กลับไปหน้าแสดงตำแหน่งงาน', ['/detail-position', 'id' => $model->ID_company], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('เลือกตำแหน่งงานนี้', ['create2', 'id' => $model->ID_detail_position], ['class' => 'btn btn-danger',
            'data'=>['confirm'=>'คุณแน่ใจหรือไม่ที่จะเลือกลงตำแหน่งงานนี้',],]) ?>   
    </p>


<!--
<div>
    <?= Html::a('Update', ['update', 'id' => $model->ID_detail_position], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_detail_position], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
</div>-->
