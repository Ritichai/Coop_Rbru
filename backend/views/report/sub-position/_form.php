<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\jui\DatePicker;
    
?>

<style>
    .box-body { padding: 10px 30px  15px; }
    .help-block { padding: 10px 0 0 15px; }
    .control-label { padding-top: 5px; }
    .col-sm-2,.col-sm-4 { margin-right: 10px; }
    .control-label { padding: 0; margin: 0; padding-bottom: 8px; }
    input[type="text"], select { margin: 0 0px; }
</style>

<?php $form = ActiveForm::begin(['options' => [ 'class' => 'form-horizontal' ]]); ?>

    <div class="box-body">
        <div class="row">
            
            <div class="col-sm-2">
                <label class="control-label">เปิดรับตั้งแต่วันที่</label>
            </div>
             <div class="col-sm-2">
                <label class="control-label">ถึงวันที่</label>
            </div>
            <div class="col-sm-2">
                <label class="control-label">สถานะ</label>
            </div>
          
            
        </div>
        <div class="row">
            
            <div class="col-sm-2">
               <?php echo $form->field($search, 'time_start')->widget(DatePicker::classname(), [
                    'language' => 'th',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => array(
                        'class' => 'form-control'
                    ),
                ])->label(false); ?>
            </div>
            <div class="col-sm-2">
                <?php echo $form->field($search, 'time_end')->widget(DatePicker::classname(), [
                    'language' => 'th',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => array(
                        'class' => 'form-control'
                    ),
                ])->label(false); ?>
            </div>
            <div class="col-sm-2">
                <?php
            echo $form->field($search, 'status')->dropDownList([ ' ' => 'แสดงทั้งหมด', 'รอการอนุมัติ' => 'รอการอนุมัติ', 'ได้รับการอนุมัติ' => 'ได้รับการอนุมัติ'])->label(false);
            ;
            ?>
            </div>
              
        
         
            


            <div class="col-sm-1">
                <?php echo Html::submitButton('ค้นหาข้อมูล', [ 'class' => 'btn btn-success' ]); ?>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>