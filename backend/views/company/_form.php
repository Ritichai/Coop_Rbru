<?php

use yii\helpers\Html;

use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\depdrop\DepDrop;
use common\models\Province;
use common\models\Amphur;
use common\models\District;


/* @var $this yii\web\View */
/* @var $model common\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-lg-4">
             <?= $form->field($model, 'ID_province')->dropdownList(
            ArrayHelper::map(Province::find()->all(),
            'PROVINCE_ID',
            'PROVINCE_NAME'),
            [
                'id'=>'ddl-province',
                'prompt'=>'เลือกจังหวัด'
]); ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'ID_amphur')->widget(DepDrop::classname(), [
            'options'=>['id'=>'ddl-amphur'],
            'data'=>$amphur,
            'pluginOptions'=>[
                'depends'=>['ddl-province'],
                'placeholder'=>'เลือกอำเภอ...',
                'url'=>Url::to(['get-amphur'])
            ]
        ]); ?>
        </div>
        <div class="col-lg-4">
             <?= $form->field($model, 'ID_district')->widget(DepDrop::classname(), [
           'data' =>$district,
           'pluginOptions'=>[
               'depends'=>['ddl-province', 'ddl-amphur'],
               'placeholder'=>'เลือกตำบล...',
               'url'=>Url::to(['get-district'])
           ]
]); ?>
        </div>
    
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'Name_Company')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'Detail_address')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    
    
    <div class="row">
    <div class="col-lg-6">
         <?= $form->field($model, 'company_web')->textarea(['maxlength' => true])?>
    </div>  
       <div class="col-lg-6">
         <?= $form->field($model, 'Tell')->textarea(['maxlength' => true , 'minlength' => 10 ,'type'=>'int'])?>
    </div> 
    </div>
    
 
    
   

   
    
   

  

  
    
   
     

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
