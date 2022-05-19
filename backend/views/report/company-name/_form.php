<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    
?>

<style>
    .box-body { padding: 10px 15px 0 15px; }
    .help-block { padding: 5px 0 0 15px; }
    .control-label { padding-top: 5px; }
    .col-sm-2,.col-sm-4 { margin-right: 10px; }
    .control-label { padding: 0; margin: 0; padding-bottom: 8px; }
    input[type="text"], select { margin: 0 15px; }
</style>

<?php $form = ActiveForm::begin(['options' => [ 'class' => 'form-horizontal' ]]); ?>

    <div class="box-body">
        <div class="row">
<!--            <div class="col-sm-2">
                <label class="control-label">รหัสสถานประกอบการ</label>
            </div>-->
            <div class="col-sm-4">
                <label class="control-label">ชื่อสถานประกอบการ</label>
            </div>
          
        </div>
        <div class="row">
<!--            <div class="col-sm-2">
                <?php echo $form->field($search, 'ID_Company')->textInput(['value' => ''])->label(false); ?>
            </div>-->
            <div class="col-sm-4">
                <?php echo $form->field($search, 'Name_Company')->textInput(['value' => ''])->label(false); ?>
            </div>
         
            <div class="col-sm-1">
                <?php echo Html::submitButton('ค้นหา', [ 'class' => 'btn btn-success' ]); ?>
            </div>
        </div>
    </div>

<?php ActiveForm::end(); ?>