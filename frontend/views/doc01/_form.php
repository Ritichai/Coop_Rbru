<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;
use common\models\Province;
use common\models\Amphur;
use common\models\District;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Doc01 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc01-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="panel panel-primary">
        <div class="panel-heading">ข้อนักศึกษา</div>
        <div class="panel-body">
            <div class="row">  
                <div class="col-sm-2"><?= $form->field($model, 'title_name_th_id')->dropDownList($model->getttllistth()) ?></div>
                <div class="col-sm-5"><?= $form->field($model, 'Fname_th')->textInput(['maxlength' => true,'placeholder' => 'ชื่อ-ภาษาไทย'])?></div>
                <div class="col-sm-5"><?= $form->field($model, 'Lname_th')->textInput(['maxlength' => true,'placeholder' => 'นามสกุล-ภาษาไทย']) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'title_name_en_id')->dropDownList($model->getttllisten()) ?></div>
                <div class="col-md-5"><?= $form->field($model, 'Fname_en')->textInput(['maxlength' => true,'placeholder' => 'ชื่อ-ภาษาอังกฤษ']) ?></div>
                <div class="col-md-5"><?= $form->field($model, 'Lname_en')->textInput(['maxlength' => true,'placeholder' => 'นามสกุล-ภาษาอังกฤษ']) ?></div>
                <div class="col-md-2"><?= $form->field($model, 'year_in_school_id_year')->dropDownList($model->getyearlistschool()) ?></div>
                <div class="col-md-5">
                    
                     <?=
                            $form->field($model, 'faculty_id_faculty')->dropDownList(
                                    ArrayHelper::map(\common\models\Faculty::find()->all(),'id_faculty', 'name_faculty'), [
                                'id' => 'ddl-faculty',
                                'prompt' => 'เลือกคณะที่เรียน..'
                            ]);
                            ?>
                    
                    
                </div>
                <div class="col-md-5">
                  <?=
                      $form->field($model, 'department_id_department')->widget(DepDrop::classname(), [
                          'options' => ['id' => 'ddl-department'],
                          'data' => $fac,
                          'pluginOptions' => [
                              'depends' => ['ddl-faculty'],
                              'placeholder' => 'เลือกสาขาวิชาที่เรียน...',
                              'url' => yii\helpers\Url::to(['get-department'])
                          ]
                      ]);
                      ?>
                
                </div>
                <div class="col-md-2"><?= $form->field($model, 'credit')->textInput() ?></div>
                <div class="col-md-2"><?= $form->field($model, 'GPA')->textInput() ?></div>
                <div class="col-md-8"><?= $form->field($model, 'Num_student')->textInput(['maxlength' => 10]) ?></div>
                
    
            </div>
               <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">ปีการศึกษาที่คาดว่าจะไปปฏิบัติสหกิจศึกษา</h3>
              </div>
              <div class="panel-body">
                  <div class="col-md-6"><?= $form->field($model, 'semester_Id_semester')->dropDownList($model->getlistsemester()) ?></div>
                  <div class="col-md-6"><?= $form->field($model, 'year_Id_year')->dropDownList($model->getyearlistyear()) ?></div>     
                  <div class="col-md-6"><?= $form->field($model, 'Talent')->textarea(['maxlength' => true]) ?></div>
                  <div class="col-md-6"><?= $form->field($model, 'Interest_academic')->textarea(['maxlength' => true]) ?></div>
                  <div class="col-md-6"><?= $form->field($model, 'geo_interested')->dropDownList($model->getingeo()) ?></div>
                  <div class="col-md-6"><?= $form->field($model, 'in_position_id')->dropDownList($model->getinpositionlist()) ?></div>
              </div>
          </div>
                 <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title">ความถนัดทางด้านภาษา</h3>
              </div>
              <div class="panel-body">
                  <div class="col-md-4"><?= $form->field($model, 'skillpoint_en')->dropDownList($model->getpointCn())?></div>
                  <div class="col-md-4"><?= $form->field($model, 'skillpoint_jp')->dropDownList($model->getpointJp()) ?></div>     
                  <div class="col-md-4"><?= $form->field($model, 'skillpoint_cn')->dropDownList($model->getpointCn()) ?></div>
              </div>
          </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">ที่อยู่ตามสำเนา</h3>
                </div>
                <div class="panel-body">                          
                    <div class="row">
                        <div class="col-md-4">
                            <?=
                            $form->field($model, 'province_PROVINCE_ID')->dropdownList(
                                    ArrayHelper::map(Province::find()->all(), 'PROVINCE_ID', 'PROVINCE_NAME'), [
                                'id' => 'ddl-province',
                                'prompt' => 'เลือกจังหวัด'
                            ]);
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?=
                            $form->field($model, 'amphur_AMPHUR_ID')->widget(DepDrop::classname(), [
                                'options' => ['id' => 'ddl-amphur'],
                                'data' => $amphur,
                                'pluginOptions' => [
                                    'depends' => ['ddl-province'],
                                    'placeholder' => 'เลือกอำเภอ...',
                                    'url' => yii\helpers\Url::to(['get-amphur'])
                                ]
                            ]);
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?=
                            $form->field($model, 'district_DISTRICT_ID')->widget(DepDrop::classname(), [
                                'data' => $district,
                                'pluginOptions' => [
                                    'depends' => ['ddl-province', 'ddl-amphur'],
                                    'placeholder' => 'เลือกตำบล...',
                                    'url' => yii\helpers\Url::to(['get-district'])
                                ]
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="width: 555px;">
                              <?= $form->field($model, 'Detail_address')->textarea(['maxlength' => true,'placeholder' => 'กรอกรายละเอียดที่อยู่เช่น บ้านเลขที่ ซอย ถนน']) ?>
                        </div>
                    </div>                                                
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">ที่อยู่ขณะที่ลังศึกษา ( ถ้าหากไม่มีให้ใส่ที่อยู่ตามสำเนา ) </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <?=
                            $form->field($model, 'province_PROVINCE_ID1')->dropdownList(
                                    ArrayHelper::map(Province::find()->all(), 'PROVINCE_ID', 'PROVINCE_NAME'), [
                                'id' => 'ddl-province1',
                                'prompt' => 'เลือกจังหวัด'
                            ]);
                            ?>
                        </div>
                       <div class="col-md-4">
                            <?=
                            $form->field($model, 'amphur_AMPHUR_ID1')->widget(DepDrop::classname(), [
                                'options' => ['id' => 'ddl-amphur1'],
                                'data' => $amphur1,
                                'pluginOptions' => [
                                    'depends' => ['ddl-province1'],
                                    'placeholder' => 'เลือกอำเภอ...',
                                    'url' => yii\helpers\Url::to(['get-amphur1'])
                                ]
                            ]);
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?=
                            $form->field($model, 'district_DISTRICT_ID1')->widget(DepDrop::classname(), [
                                'data' => $district1,
                                'pluginOptions' => [
                                    'depends' => ['ddl-province1', 'ddl-amphur1'],
                                    'placeholder' => 'เลือกตำบล...',
                                    'url' => yii\helpers\Url::to(['get-district'])
                                ]
                            ]);
                            ?>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="width: 555px;">
                            <?= $form->field($model, 'Detail_address2')->textarea(['maxlength' => true,'placeholder' => 'กรอกรายละเอียดที่อยู่เช่น บ้านเลขที่ ซอย ถนน']) ?>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
    <div class="row">
     <div class="col-md-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">ข้อมูลที่ใช้เพื่อติดต่อนักศึกษา</h3>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-6"><?= $form->field($model, 'Cell_phone_num')->textInput(['maxlength' => 10]) ?></div>
                              <div class="col-md-6"><?= $form->field($model, 'Phone_num')->textInput(['placeholder' => 'ถ้าไม่มีสามารถเว้นว่างได้','maxlength' => 10]) ?></div>
                              
                          </div>
                          <div class="row">
                              <div class="col-md-12"><?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?></div> 
                          </div>
                      </div>
                  </div>        
              </div>
         <div class="col-md-6">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">ข้อมูลที่ใช้เพื่อติดต่อกับผู้ปกครองของนักศึกษา</h3>
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-md-4"><?= $form->field($model, 'title_name_th_id_title_name_th')->dropDownList($model->getttllistth()) ?></div>
                              <div class="col-md-4"><?= $form->field($model, 'Fname_th2')->textInput(['maxlength' => true]) ?></div>
                               <div class="col-md-4"><?= $form->field($model, 'Lname_th2')->textInput(['maxlength' => true]) ?></div>
                          </div>
                          <div class="row">
                              <div class="col-md-6"><?= $form->field($model, 'Relation')->textInput(['maxlength' => true]) ?></div> 
                              <div class="col-md-6"><?= $form->field($model, 'Cell_phone_num3')->textInput(['maxlength' => 10]) ?></div> 
                              
                          </div>
                      </div>
                  </div>        
              </div>
</div>
            
      
  
    
       

    
    
    <div class="form-group">
      
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'บันทึก') : Yii::t('app', 'บันทึก'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
