<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SubCompany */

$this->title =$model->doc01->titleNameTh->name_title_name_th.' '.$model->doc01->Fname_th.' '.$model->doc01->Lname_th.' กำลังปฏิบัติงานที่ '.$model->namecompany->Name_Company;
$this->params['breadcrumbs'][] = ['label' => 'สถานประกอบการที่เลือก', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-company-view">

    <h2><?= Html::encode($this->title) ?></h2>
<br>
    <p>
        <?= Html::a('แก้ไขข้อมูล', ['update', 'id' => $model->created_by], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบข้อมูลในหน้านี้ทั้งหมด', ['delete', 'id' => $model->created_by], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [  
        'label' => 'ชื่อนักศึกษา',
        'value' =>$model->doc01->titleNameTh->name_title_name_th.' '.$model->doc01->Fname_th.' '.$model->doc01->Lname_th
    ],
            
            [  
        'label' => 'ชื่อสถานประกอบการ',
        'value' =>$model->namecompany->Name_Company,
    ],
            [  
        'format'=>'html',
        'label' => 'ลายละเอียดที่ตั้ง',
        'value' => 'เลขที่ : '.$model->namecompany->Detail_address.
        '<br>' . 'ตำบล : ' . $model->namecompany->district->DISTRICT_NAME.
        '<br>' . 'อำเภอ : ' . $model->namecompany->amphur->AMPHUR_NAME.
        '<br>' . 'จังหวัด : ' . $model->namecompany->province->PROVINCE_NAME,
        ],
            'namecompany.company_web:url',
            'namecompany.Tell',
        ],
    ]) ?>

</div>
