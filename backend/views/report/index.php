<?php 


$this->title = Yii::t('app', ' ');
?>
<style>
    .box-header h3 { padding-left: 5px; }
    .box-body { padding: 10px 15px; }
    .info-box-content { padding-top: 20px; }
    .info-box-text { font-size: 0.9em; }
    .info-box-link { color: #FFF; }
    .info-box-number { padding-top: 1px; }
    .progress-bar { width: 97%; }
</style>

<div class="box box-success">
    <div class="box-header">
        <h3>เมนู สร้างรายงาน</h3>
    </div>
   <div class="box-body">
       
       <div class="row">
            <?php echo $this->render('_menu', [ 'url' => '/coop/Coop_Rbru/backend/web/index.php?r=report/company-name','label' => 'รายชื่อสถานประกอบการทั้งหมด' ]); ?>
            <?php echo $this->render('_menu', [ 'url' => '/report/detail-position','label' => 'รายชื่อสถานประกอบการที่เปิดรับนักศึกษาสหกิจศึกษา' ]); ?>
           <?php echo $this->render('_menu', [ 'url' => '/report/sub-position','label' => 'ตำแหน่งงานที่นักศึกษาเลือก' ]); ?>
            
        </div>
       
       
        </div>
</div>