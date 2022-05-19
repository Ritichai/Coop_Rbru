<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubCompany */

$this->title = 'ระบุชื่อสถานประกอบที่กำลังปฏิบัติงาน';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-company-create">
    
   
    <h2><?= Html::encode($this->title) ?></h2>
<br>
    
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    
    
</div>
