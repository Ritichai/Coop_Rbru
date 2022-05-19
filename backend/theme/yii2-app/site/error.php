<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $name;
?>
<div class="jumbotron">
      <h1><?=Html::img(Url::base().'/images/Minion_icon.png')?><?= Html::encode($this->title) ?></h1>
      <div style="color: #a00"><h3>คุณไม่สามารถเข้าใช้งานในส่วนนี้ได้ กรุณาติดต่อผู้ดูแลระบบ</h3></div>
   
</div>