<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'เปลียนรหัสผ่าน';    
$this->params['breadcrumbs'][] = 'เปลียนรหัสผ่าน';
?>
<div class="user-update">
<br>
    <div><h3>กรอกรหัสผ่านที่ต้องการ</h3></div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
   

</div>
