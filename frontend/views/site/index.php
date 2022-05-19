<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
$this->title = 'Coop System';
?>
<div class="site-index">

    <div class="container thumbnail" style="background-color: #eeeeee">
        <div class="jumbotron">
            <h2>Welcome Student of COOP RBRU System</h2>
            <p>ยินดีต้อนรับนักศึกษาทุกท่านที่มีความสนใจ เข้าร่วมโครงการสหกิจศึกษา</p>   
        </div>
        
    </div>
    <?php if (Yii::$app->session->hasFlash('alert')): ?>
        <?=
        \yii\bootstrap\Alert::widget([
            'body' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
            'options' => ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
        ])
        ?>
    <?php endif; ?>
</div>

