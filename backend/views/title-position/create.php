<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TitlePosition */

$this->title = Yii::t('app', 'เพื่มประเภทตำแหน่งงาน');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายการประเภทตำแหน่งงาน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="title-position-create">



  
<div class="col-md-6">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?> 
</div>

</div>
