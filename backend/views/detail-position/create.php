<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */

$this->title = Yii::t('app', 'เพิ่มข้อมูลตำแหน่งงานตำแหน่งงาน');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ลายละเอียดตำแหน่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-position-create">
<br>
    

   



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?> 



</div>
