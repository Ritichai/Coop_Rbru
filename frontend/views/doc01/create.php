<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Doc01 */

$this->title = 'แบบแจ้งรายละเอียดการเข้าปฏิบัติสหกิจศึกษา เอกสารสหกิจ 01';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc01-create">
    <br>
    <h1><?= Html::encode($this->title) ?></h1>
<br>
    <?= $this->render('_form', [
        'model' => $model,
         'amphur'=> [],
        'district' =>[],
         'amphur1'=> [],
        'district1' =>[],
        'fac' =>[],
        
    ]) ?>

</div>
