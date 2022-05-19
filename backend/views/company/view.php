<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = $model->Name_Company;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลสถานประกอบการ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    <br>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_Company',
            'Name_Company',
            'Detail_address',
            'province.PROVINCE_NAME',
            'amphur.AMPHUR_NAME',
            'district.DISTRICT_NAME',
            'company_web:url',
            'Tell',
           
            
            
        ],
    ]) ?>

    
    <p>
        <?= Html::a(Yii::t('app', 'แก้ไขข้อมูล'), ['update', 'id' => $model->ID_Company], ['class' => 'btn btn-primary']) ?>
        
        <?= Html::a(Yii::t('app', 'ลบข้อมูล'), ['delete', 'id' => $model->ID_Company], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', ' คุณแน่ว่าจะลบข้อมูลของ '.$model->Name_Company),
                'method' => 'post',
            ],
        ]) ?>
     
           
    </p>
    
</div>
