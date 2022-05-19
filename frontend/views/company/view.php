<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Company */

$this->title = $model->Name_Company;

$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

    
    <h1><?= Html::encode($this->title) ?></h1>

<br>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'ID_Company',
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
     <?= Html::a(Yii::t('app', 'ดูลายละเอียดสถานประกอบการอื่น'), ['/company'], ['class' => 'btn btn-primary']) ?>
      <?= Html::a(Yii::t('app', 'กลับไปหน้าเลือกตำแหน่งงาน'), ['/detail-position'], ['class' => 'btn btn-danger']) ?>
   
</p>

</div>
