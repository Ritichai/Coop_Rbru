<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doc01 */

$this->title = ' แก้ไขข้อมูล  ' . $model->titleNameTh->name_title_name_th.' '.$model->Fname_th.' '.$model->Lname_th;
$this->params['breadcrumbs'][] = 'แก้ไขเอกสาร 01';
?>
<div class="doc01-update">

    <div><h3>แก้ข้อมูลในเอกสาร</h3></div>

    <?= $this->render('_form', [
        'model' => $model,
        'amphur'=> $amphur,
        'district' =>$district,
         'amphur1'=> $amphur1,
         'district1' =>$district1,
          'fac' =>$fac
    ]) ?>

</div>
