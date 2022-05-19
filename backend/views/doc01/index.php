<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Doc01Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ข้อมูลนักศึกษาเตรียมสหกิจศึกษา');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc01-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<br>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'Id_doc_01',
          //  'title_name_th_id',
            'Num_student',
            'Fname_th',
            'Lname_th',
          
            // 'title_name_en_id',
            // 'Fname_en',
            // 'Lname_en',
         
            
            
              [
            'attribute' => 'faculty_id_faculty',
            'value' => 'facultyIdFaculty.name_faculty',
            'filter' => Html::activeDropDownList($searchModel, 'faculty_id_faculty', yii\helpers\ArrayHelper::map(\common\models\Faculty::find()->asArray()->all(), 'id_faculty', 'name_faculty'), ['class' => 'form-control', 'prompt' => 'เลือกคณะ']),
        ],
            
        
             [
            'attribute' => 'department_id_department',
            'value' => 'departmentIdDepartment.name_department',
         
        ],
            
            // 'credit',
            // 'GPA',
            // 'semester_Id_semester',
            
           
              [
            'attribute' => 'year_Id_year',
            'value' => 'yearIdYear.Num_year',
            'filter' => Html::activeDropDownList($searchModel, 'year_Id_year', yii\helpers\ArrayHelper::map(\common\models\Year::find()->asArray()->all(), 'Id_year', 'Num_year'), ['class' => 'form-control', 'prompt' => 'เลือกสาขาวิชา']),
        ],
            // 'province_PROVINCE_ID',
            // 'amphur_AMPHUR_ID',
            // 'district_DISTRICT_ID',
            // 'Detail_address',
            // 'Cell_phone_num',
            // 'Phone_num',
            // 'Email:email',
            // 'province_PROVINCE_ID1',
            // 'amphur_AMPHUR_ID1',
            // 'district_DISTRICT_ID1',
            // 'Detail_address2',
            // 'title_name_th_id_title_name_th',
            // 'Fname_th2',
            // 'Lname_th2',
            // 'Relation',
            // 'Cell_phone_num3',
            // 'Talent',
            // 'skillpoint_en',
            // 'skillpoint_jp',
            // 'skillpoint_cn',
            // 'geo_interested',
            // 'in_position_id',
            // 'Interest_academic',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',

                 [
              'class' => 'yii\grid\ActionColumn',
              'options'=>['style'=>'width:120px;'],
              'buttonOptions'=>['class'=>'btn btn-default'],
              'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>'
           ],
        ],
    ]); ?>


</div>
