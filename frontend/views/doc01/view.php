<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model common\models\Doc01 */

$this->title = $model->titleNameTh->name_title_name_th.' '.$model->Fname_th.' '.$model->Lname_th;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รายชื่อนักศึกษาที่เข้าร่วมโครงการ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc01-view">

    <br>

    <p>
        <?= Html::a(Yii::t('app', 'แก้ไขข้อมูล'), ['update', 'id' => $model->Id_doc_01], ['class' => 'btn btn-primary']) ?>
        
    </p>
<!--    <div>
        <?= Html::a(Yii::t('app', 'ลบข้อมูลในหน้านี้ทั้งหมด'), ['delete', 'id' => $model->Id_doc_01], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </div>-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'Id_doc_01',
            
          
             
        [
            'label' => 'ชื่อไทย',
            'value' => $model->titleNameTh->name_title_name_th . ' ' . $model->Fname_th . ' ' . $model->Lname_th,
        ],
     
        [
            'label' => 'ชื่ออังกฤษ',
            'value' => $model->titleNameEn->nametitle_name_en . ' ' . $model->Fname_en . ' ' . $model->Lname_en,
        ],
            
        [
            'format'=>'html',
            'label' => 'กำลังศึกษา',
            'value' => 'คณะ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '   .$model->facultyIdFaculty->name_faculty . '<br>' . 
                       'สาขาวิชา :&nbsp; '.$model->departmentIdDepartment->name_department. '<br>' . 
                       'ชั้นปีที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; '.$model->yearInSchoolIdYear->num_year,
        ],       
            
            'Num_student',  
            'credit',
            'GPA',
    
        [
            'format'=>'html',
            'label' => 'ภาคการศึกษาที่ต้องการออกปฏิบัติงาน',
            'value' =>'ภาคเรียนที่ &nbsp;&nbsp;&nbsp;: '.$model->semesterIdSemester->name_semester.'<br>'.
                      'ปีการศึกษาที่ : ' . $model->yearIdYear->Num_year,
        ], 
            'geoInterested.GEO_NAME',
            'inPosition.name_in_positioncol',
    
        [
            'format'=>'html',
            'label' => 'ที่อยู่ตามสำเนา',
            'value' => 'เลขที่&nbsp;:&nbsp;'.$model->Detail_address.
            '<br>'.'ตำบล : '.$model->districtDISTRICT->DISTRICT_NAME.
            '<br>'.'อำเภอ : '.$model->amphurAMPHUR->AMPHUR_NAME.
            '<br>'.'จังหวัด : '.$model->provincePROVINCE->PROVINCE_NAME,
                          
        ],
          
        [
            'format'=>'html',
            'label' => 'ข้อมูลสำหรับติดต่อนักศึกษา',
            'value' => 'เบอร์โทร :&nbsp;&nbsp;'.$model->Cell_phone_num.'<br>'.
                       'เบอร์บ้าน :&nbsp;&nbsp;'.$model->Phone_num.'<br>'.
                       'Email   :&nbsp;&nbsp;'.$model->Email,
        ],  
            
            [
            'format'=>'html',
            'label' => 'ที่อยู่ขณะที่กำลังศึกษา',
            'value' => 
               'เลขที่ :'.$model->Detail_address2.
            '<br>'.'ตำบล : '.$model->districtDISTRICTID1->DISTRICT_NAME.
            '<br>'.'อำเภอ : '.$model->amphurAMPHURID1->AMPHUR_NAME.
            '<br>'.'จังหวัด : '.$model->provincePROVINCEID1->PROVINCE_NAME,
                          
        ],
            
        [
            'format'=>'html',
            'label' => 'ผู้ปกครองที่สามารถติดต่อได้',
            'value' => $model->titleNameTh1->name_title_name_th. ' ' . $model->Fname_th2 . ' ' . $model->Lname_th2.'<br>'
             .'ความสัมพันธ์ : '.$model->Relation.'<br>'.'เบอร์โทรติดต่อ : '.$model->Cell_phone_num3,
        ],
            
        [
            'format'=>'html',
            'label' => 'ความสามารถทางด้านภาษา',
            'value' => 'ความสามารถทางภาษาอังกฤษ :&nbsp;&nbsp;'.$model->skillpointEn->skillpoint.'<br>'.
                        'ความสามารถทางภาษาญี่ปุ่น :&nbsp;&nbsp;'.$model->skillpointJp->skillpoint.'<br>'.
                        'ความสามารถทางภาษาจีน :&nbsp;&nbsp;'.$model->skillpointCn->skillpoint.'<br>',             
        ],    
            
            
            
           
            
            'Talent',
            
           
            
            'Interest_academic',
            //'created_by',
            //'updated_by',
            'created_at:date',
            'updated_at:date',
        ],
    ]) ?>

</div>
