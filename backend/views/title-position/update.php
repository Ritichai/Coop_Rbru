<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TitlePosition */

$this->title = 'แก้ไขประเภทตำแหน่งงาน';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายการประเภทตำแหน่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>  $model->title_positioncol, 'url' => ['view', 'id' => $model->idtitle_position]];

?>
<div class="title-position-update">


    <div class="col-md-6">
  
          <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

        
    </div>
  
</div>
