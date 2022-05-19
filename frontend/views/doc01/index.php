<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\Doc01Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เอกสาร 01';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc01-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Doc01', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'Id_doc_01',
            [
    'attribute' => 'created_by',
            'value' => 'users.username',
        ],
          
            
            'Fname_th',
            'Lname_th',
            'Num_student',
            // 'title_name_en_id',
            // 'Fname_en',
            // 'Lname_en',
            // 'year_in_school_id_year',
            // 'faculty_id_faculty',
            // 'department_id_department',
            // 'credit',
            // 'GPA',
            // 'semester_Id_semester',
            // 'year_Id_year',
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
    
            
        // 'updated_by',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
