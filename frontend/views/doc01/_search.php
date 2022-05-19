<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Doc01Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc01-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_doc_01') ?>

    <?= $form->field($model, 'title_name_th_id') ?>

    <?= $form->field($model, 'Fname_th') ?>

    <?= $form->field($model, 'Lname_th') ?>

    <?= $form->field($model, 'Num_student') ?>

    <?php // echo $form->field($model, 'title_name_en_id') ?>

    <?php // echo $form->field($model, 'Fname_en') ?>

    <?php // echo $form->field($model, 'Lname_en') ?>

    <?php // echo $form->field($model, 'year_in_school_id_year') ?>

    <?php // echo $form->field($model, 'faculty_id_faculty') ?>

    <?php // echo $form->field($model, 'department_id_department') ?>

    <?php // echo $form->field($model, 'credit') ?>

    <?php // echo $form->field($model, 'GPA') ?>

    <?php // echo $form->field($model, 'semester_Id_semester') ?>

    <?php // echo $form->field($model, 'year_Id_year') ?>

    <?php // echo $form->field($model, 'province_PROVINCE_ID') ?>

    <?php // echo $form->field($model, 'amphur_AMPHUR_ID') ?>

    <?php // echo $form->field($model, 'district_DISTRICT_ID') ?>

    <?php // echo $form->field($model, 'Detail_address') ?>

    <?php // echo $form->field($model, 'Cell_phone_num') ?>

    <?php // echo $form->field($model, 'Phone_num') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'province_PROVINCE_ID1') ?>

    <?php // echo $form->field($model, 'amphur_AMPHUR_ID1') ?>

    <?php // echo $form->field($model, 'district_DISTRICT_ID1') ?>

    <?php // echo $form->field($model, 'Detail_address2') ?>

    <?php // echo $form->field($model, 'title_name_th_id_title_name_th') ?>

    <?php // echo $form->field($model, 'Fname_th2') ?>

    <?php // echo $form->field($model, 'Lname_th2') ?>

    <?php // echo $form->field($model, 'Relation') ?>

    <?php // echo $form->field($model, 'Cell_phone_num3') ?>

    <?php // echo $form->field($model, 'Talent') ?>

    <?php // echo $form->field($model, 'skillpoint_en') ?>

    <?php // echo $form->field($model, 'skillpoint_jp') ?>

    <?php // echo $form->field($model, 'skillpoint_cn') ?>

    <?php // echo $form->field($model, 'geo_interested') ?>

    <?php // echo $form->field($model, 'in_position_id') ?>

    <?php // echo $form->field($model, 'Interest_academic') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
