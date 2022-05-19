<?php

/* @var $this yii\web\View */

$this->title = '';
?>
<div class="site-index">


    <div class="row">
        <div class="col-lg-4 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">นักศึกษาที่เข้าร่วมโครงการ</span>
              <span class="info-box-number">
                 
                  <h2> <?php echo common\models\Doc01::find()->count(); ?> </h2>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
        <div class="col-lg-4 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-red"><i class="fa fa-building-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">สถานประกอบที่เข้าร่วมโครงการ</span>
              <span class="info-box-number">
                 
                  <h2><?php echo common\models\Company::find()->count(); ?></h2>
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
    <div class="col-lg-4 col-xs-6">
        <div class="info-box">  
            <span class="info-box-icon bg-blue"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">จำนวนผู้ใช้งานทั้งหมดในระบบ</span>
              <span class="info-box-number">
                  <h2> <?php echo \common\models\User::find()->count(); ?></h2>
                  
              </span>
            </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
        
   </div>


</div>
