<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;
use kartik\widgets\DateTimePicker;
use yii\helpers\Url;

use common\models\Company;
use kartik\depdrop\DepDrop;
use yii\bootstrap\ActiveForm;



/* @var $this yii\web\View */
/* @var $model common\models\DetailPosition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-position-form">

    
    
    
    <?php $form = ActiveForm::begin(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">รายละเอียดตำแหน่งงาน</div>
                <div class="panel panel-body">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <?=
                        $form->field($model, 'ID_company')->widget(kartik\select2\Select2::className(), [
                            'data' => yii\helpers\ArrayHelper::map(Company::find()->all(), 'ID_Company', 'Name_Company'),
                            'options' => ['placeholder' => 'เลือกสถานประกอบการ'],
                            'disabled' => FALSE,
                            'pluginOptions' => ['allowClear' => true]
                        ])
                        ?>
                    </div>
<!-- _________________________________________________________________________________________________________             -->

<div class="col-md-4">
 
    
          <?= $form->field($model, 'ID_ttl_position')->dropdownList(
            ArrayHelper::map(common\models\TitlePosition::find()->all(),
            'idtitle_position',
            'title_positioncol'),
            [
                'id'=>'position',
                'prompt'=>'เลือกประเภทงาน..'
            ]); ?>
</div>
<div class="col-md-4">              
       
    <?= $form->field($model, 'name_position')->textInput(['maxlength' => true]) ?>
</div>        
 
<!--_________________________________________________________________________________________________________             -->
                    
                    
                    
<div class="col-md-4"><?= $form->field($model, 'Num_student')->textInput(['type' => 'number'],['prompt'=>'เลือกจำนวนนักศึกษาที่รับ..']) ?></div>
                    
<div class="col-xs-3 col-sm-3 col-md-3">            
            <?=$form->field($model,'time')->widget(\yii\jui\DatePicker::classname(),[
                    'language' => 'th',
                    'dateFormat' => 'yyyy-MM-dd',
                    'clientOptions' => [
                        'changeMonth' => true,
                        'changeYear' => true,
                     ],
                      'options'=>['class'=>'form-control',
                      'disabled'=>FALSE
                     ],
                ]);
            ?>
        </div>
                    
                    <div class="col-md-5">
                        <?=
                        $form->field($model, 'ID_fac')->dropDownList(
                                \yii\helpers\ArrayHelper::map(\common\models\Faculty::find()->all(), 'id_faculty', 'name_faculty'), [
                            'id' => 'faculty',
                            'prompt' => 'คณะที่เปิดรับ..'
                        ]);
                        ?>
                    </div>
               
                    <div class="col-md-12"><?= $form->field($model, 'Detail')->textarea(['maxlength' => true]) ?></div>
                    
                     
                
    
    <div class="form-group col-md-3">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>
                </div>
                
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
