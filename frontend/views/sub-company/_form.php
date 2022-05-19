<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\Company;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\SubCompany */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-company-form">

    <?php $form = ActiveForm::begin(); ?>

    




      
    
            <div class="col-lg-12">
                <?=
                $form->field($model, 'ID_Company')->widget(Select2::className(), [
                    'data' => ArrayHelper::map(Company::find()->all(), 'ID_Company', 'Name_Company'),
                    'options' => ['placeholder' => 'เลือกสถานประกอบการ'],
                    'disabled' => FALSE,
                    'pluginOptions' => ['allowClear' => true]
                ])
                ?>               
            </div>
            <div class="col-lg-12">      
                <?= Html::submitButton($model->isNewRecord ? 'เลือกสถานประกอบการ' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>         
            </div>             
       
    
   

    <?php ActiveForm::end(); ?>

</div>
