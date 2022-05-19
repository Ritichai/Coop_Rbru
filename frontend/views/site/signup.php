<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ลงทะเบียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

 

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' =>TRUE,'maxlength' => 10]) ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                <?= $form->field($model, 'email') ?>

 

                <div class="form-group">
                    <?= Html::submitButton('สมัครสมาชิก', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-1">
            <h1><?=  yii\bootstrap\Html::img(yii\helpers\Url::base().'/images/Minion_icon2.png')?></h1> 
        </div>
        <div class="col-lg-5">
            <h4>หลังจากที่ได้สมัครสมาชิกเสร็จแล้ว<br>กรุณารอเจ้าหน้าที่ ยืนยันการเข้าใช้งาน <br> หากมีข้อสงสัย ติดต่อ ศูนย์สหกิจศึกษา อาคาร36</h4>
           
        </div>
    </div>
</div>
