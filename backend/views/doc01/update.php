<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doc01 */

$this->title = $model->titleNameTh->name_title_name_th.' '.$model->Fname_th.' '.$model->Lname_th;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลนักศึกษาเตรียมสหกิจศึกษา'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->titleNameTh->name_title_name_th.' '.$model->Fname_th.' '.$model->Lname_th, 'url' => ['view', 'id' => $model->Id_doc_01]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไขข้อมูล');
?>
<div class="doc01-update">

    

     <?= $this->render('_form', [
        'model' => $model,
        'amphur'=> $amphur,
        'district' =>$district,
         'amphur1'=> $amphur1,
         'district1' =>$district1,
          'fac' =>$fac
    ]) ?>
</div>
