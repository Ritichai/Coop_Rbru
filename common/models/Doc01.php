<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "doc_01".
 *
 * @property integer $Id_doc_01
 * @property integer $title_name_th_id
 * @property string $Fname_th
 * @property string $Lname_th
 * @property string $Num_student
 * @property integer $title_name_en_id
 * @property string $Fname_en
 * @property string $Lname_en
 * @property integer $year_in_school_id_year
 * @property integer $faculty_id_faculty
 * @property integer $department_id_department
 * @property integer $credit
 * @property double $GPA
 * @property integer $semester_Id_semester
 * @property integer $year_Id_year
 * @property integer $province_PROVINCE_ID
 * @property integer $amphur_AMPHUR_ID
 * @property integer $district_DISTRICT_ID
 * @property string $Detail_address
 * @property integer $Cell_phone_num
 * @property integer $Phone_num
 * @property string $Email
 * @property integer $province_PROVINCE_ID1
 * @property integer $amphur_AMPHUR_ID1
 * @property integer $district_DISTRICT_ID1
 * @property string $Detail_address2
 * @property integer $title_name_th_id_title_name_th
 * @property string $Fname_th2
 * @property string $Lname_th2
 * @property string $Relation
 * @property integer $Cell_phone_num3
 * @property string $Talent
 * @property integer $skillpoint_en
 * @property integer $skillpoint_jp
 * @property integer $skillpoint_cn
 * @property integer $geo_interested
 * @property integer $in_position_id
 * @property string $Interest_academic
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Doc01 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
     public function behaviors(){
            return [
                [
                    'class' => BlameableBehavior::className(),
                    'createdByAttribute'=>'Id_doc_01',
                    'updatedByAttribute' => 'updated_by',
                ],
                TimestampBehavior::className(),
            ];
    }

    
    public static function tableName()
    {
        return 'doc_01';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_name_th_id', 'Fname_th', 'Lname_th', 'Num_student', 'title_name_en_id', 'Fname_en', 'Lname_en',
              'year_in_school_id_year', 'faculty_id_faculty', 'department_id_department', 'credit', 'GPA', 
              'semester_Id_semester', 'year_Id_year',
              'province_PROVINCE_ID', 'amphur_AMPHUR_ID', 'district_DISTRICT_ID', 'Cell_phone_num', 
              'Email', 'title_name_th_id_title_name_th', 'Fname_th2', 'Lname_th2', 'Relation', 'Cell_phone_num3', 
              'Talent', 'skillpoint_en', 'skillpoint_jp', 'skillpoint_cn', 'geo_interested', 'in_position_id', 
              'Interest_academic', 'province_PROVINCE_ID1', 'amphur_AMPHUR_ID1', 'district_DISTRICT_ID1'], 'required'],
            [['title_name_th_id', 'title_name_en_id', 'year_in_school_id_year', 'faculty_id_faculty', 'department_id_department', 'credit', 'semester_Id_semester', 'year_Id_year', 'province_PROVINCE_ID', 'amphur_AMPHUR_ID', 'district_DISTRICT_ID', 'Cell_phone_num', 'Phone_num', 'province_PROVINCE_ID1', 'amphur_AMPHUR_ID1', 'district_DISTRICT_ID1', 'title_name_th_id_title_name_th', 'Cell_phone_num3', 'skillpoint_en', 'skillpoint_jp', 'skillpoint_cn', 'geo_interested', 'in_position_id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['GPA'], 'number'],
            [['Fname_th', 'Lname_th', 'Fname_en', 'Lname_en', 'Email', 'Fname_th2', 'Lname_th2'], 'string', 'max' => 100],
            [['Num_student'], 'integer' ],
            [['Detail_address', 'Detail_address2', 'Interest_academic'], 'string', 'max' => 500],
            [['Relation'], 'string', 'max' => 50],
            [['Talent'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_doc_01' => 'Id Doc 01',
            'title_name_th_id' => 'คำนำหน้าชื่อภาษาไทย',
            'Fname_th' => 'ชื่อ',
            'Lname_th' => 'นามสกุล',
            'Num_student' => 'รหัสนักศึกษา',
            'title_name_en_id' => 'คำนำหน้าชื่ออังกฤษ',
            'Fname_en' => 'ชื่อ',
            'Lname_en' => 'นามสกุล',
            'year_in_school_id_year' => 'ชั้นปี',
            'faculty_id_faculty' => 'คณะ',
            'department_id_department' => 'สาขาวิชา',
            'credit' => 'จำนวนหน่วยกิจปัจจุบัน',
            'GPA' => 'เกรดเฉลี่ย',
            'semester_Id_semester' => 'ภาคการศึกษา',
            'year_Id_year' => 'ปีการศึกษา',
            'province_PROVINCE_ID' => 'จังหวัด',
            'amphur_AMPHUR_ID' => 'อำเภอ',
            'district_DISTRICT_ID' => 'ตำบล',
            'Detail_address' => 'รายละเอียดที่อยู่',
            'Cell_phone_num' => 'เบอร์มือถือ',
            'Phone_num' => 'เบอร์โทรศัพท์บ้าน',
            'Email' => 'Eamil',
            'province_PROVINCE_ID1' => 'จังหวัด',
            'amphur_AMPHUR_ID1' => 'อำเภอ ',
            'district_DISTRICT_ID1' => 'ตำบล',
            'Detail_address2' => 'รายละเอียดที่อยู่',
            'title_name_th_id_title_name_th' => 'คำนำหน่าชื่อ',
            'Fname_th2' => 'ชื่อ',
            'Lname_th2' => 'นามสกุล',
            'Relation' => 'ความสัมพันธ์',
            'Cell_phone_num3' => 'เบอร์โทรผู้ปกครอง',
            'Talent' => 'ความสามารถพิเศษหรือกิจกรรมของนักศึกษา',
            'skillpointEn.skillpoint' => 'ความสามารถทางด้านภาษาอังกฤษ',
            'skillpointJp.skillpoint' => 'ความสามารถทางด้านภาษาญี่ปุ่น',
            'skillpointCn.skillpoint' => 'ความสามารถทางด้านภาษาจีน',
            'geo_interested.GEO_NAME' => 'ภูมิภาคทีนักศึกษาสนใจฝึกงาน',
            'in_position_id' => 'ลักษณะงานที่สนใจ',
            'Interest_academic' => 'ความสนใจทางด้านวิชาการ',
            'created_by' => 'กรอกโดย',
            'updated_by' => 'แก้โดย',
            'created_at' => 'กรอกเมื่อ',
            'updated_at' => 'แก้เมือ',
            'geoInterested.GEO_NAME'=>'ภูมิภาคที่สนใจออกปฏิบัติงาน',
            'inPosition.name_in_positioncol'=>'ลักษณะงานที่สนใจ',
            'titleNameEn.nametitle_name_en'=>'คำนำหน้าชื่อภาษาอังกฤษ',
            'titleNameTh.name_title_name_th'=>'คำนำหน้าชื่อภาษาไทย',
            'titleNameTh1.name_title_name_th'=>'ผู้ปกครองที่สามารถติดต่อได้',
            'semesterIdSemester.name_semester'=>'ภาคเรียนที่ต้องการออกฝึกงาน',
            'yearIdYear.Num_year'=>'ปีการศึกษา',
            'skillpoint_en'=>'ความสามารถทางด้านภาษาอังกฤษ',
            'skillpoint_jp'=>'ความสามารถทางด้านภาษาญี่ปุ่น',
            'skillpoint_cn'=>'ความสามารถทางด้านภาษาจีน',
            'geo_interested'=>'ภูมิภาคที่สนใจออกฝึกงาน'
            
        ];
    }
    
    public function getSkillpointCn()
    {
        return $this->hasOne(Skillpoint::className(), ['id_skillpoint' => 'skillpoint_cn']);
    }
       public function getpointCn()
    {
        $list = Skillpoint::find()->orderBy        ('id_skillpoint')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_skillpoint', 'skillpoint');
    }
    
    public function getusers()
    {
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }
       public function getUser()
    {
        return $this->hasOne($this->module->modelMap['User'], ['id' => 'created_by']);
    }

        public function getSkillpointEn()
    {
        return $this->hasOne(Skillpoint::className(), ['id_skillpoint' => 'skillpoint_en']);
    }
    public function getpointEn()
    {
        $list = Skillpoint::find()->orderBy        ('id_skillpoint')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_skillpoint', 'skillpoint');
    }
    
    
    
    
        public function getpointJp()
    {
        $list = Skillpoint::find()->orderBy        ('id_skillpoint')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_skillpoint', 'skillpoint');
    } 
       public function getSkillpointJp()
    {
        return $this->hasOne(Skillpoint::className(), ['id_skillpoint' => 'skillpoint_en']);
    }
    
        public function getingeo()
    {
        $list = TblGeography::find()->orderBy('GEO_ID')->all();
        return \yii\helpers\ArrayHelper::map($list,'GEO_ID', 'GEO_NAME');
    }
 public function getGeoInterested()
    {
        return $this->hasOne(TblGeography::className(), ['GEO_ID' => 'geo_interested']);
    }    
    
     public function getTitleNameEn()
    {
        return $this->hasOne(TitleNameEn::className(), ['id_title_name_en' => 'title_name_en_id']);
    }
    
    public function getlistsemester()
    {
        $list = Semester::find()->orderBy      ('Id_semester')->all();
        return \yii\helpers\ArrayHelper::map($list,'Id_semester', 'name_semester');
    }
    
    
    
    public function getinpositionlist()
    {
        $list = InPosition::find()->orderBy      ('id_in_position')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_in_position', 'name_in_positioncol');
    }
        public function getInPosition()
    {
        return $this->hasOne(InPosition::className(), ['id_in_position' => 'in_position_id']);
    }
    
    

    public function getyearlistschool()
    {
        $list = YearInSchool::find()->orderBy('id_year')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_year', 'num_year');
    }
     public function getYearInSchoolIdYear()
    {
        return $this->hasOne(YearInSchool::className(), ['id_year' => 'year_in_school_id_year']);
    }
    public function getyearlistyear()
    {
        $list = Year::find()->orderBy('Id_year')->all();
        return \yii\helpers\ArrayHelper::map($list,'Id_year', 'Num_year');
    }
    public function getttllistth()
    {
        $list = TitleNameTh::find()->orderBy('id_title_name_th')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_title_name_th', 'name_title_name_th');
    }
     
     public function getTitleNameTh()
    {
        return $this->hasOne(TitleNameTh::className(), ['id_title_name_th' => 'title_name_th_id']);
    }
     public function getTitleNameTh1()
    {
        return $this->hasOne(TitleNameTh::className(), ['id_title_name_th' => 'title_name_th_id_title_name_th']);
    }
    
    
    public function getttllisten()
    {
        $list = TitleNameEn::find()->orderBy('id_title_name_en')->all();
        return \yii\helpers\ArrayHelper::map($list,'id_title_name_en', 'nametitle_name_en');
    }
     public function getSemesterIdSemester()
    {
        return $this->hasOne(Semester::className(), ['Id_semester' => 'semester_Id_semester']);
    }
    
     public function getYearIdYear()
    {
        return $this->hasOne(Year::className(), ['Id_year' => 'year_Id_year']);
    }
    
      public function getProvincePROVINCE()
    {
        return $this->hasOne(Province::className(), ['PROVINCE_ID' => 'province_PROVINCE_ID']);
    }

    
    public function getProvincePROVINCEID1()
    {
        return $this->hasOne(Province::className(), ['PROVINCE_ID' => 'province_PROVINCE_ID1']);
    }
    
      public function getAmphurAMPHUR()
    {
        return $this->hasOne(Amphur::className(), ['AMPHUR_ID' => 'amphur_AMPHUR_ID']);
    }

    
    public function getAmphurAMPHURID1()
    {
        return $this->hasOne(Amphur::className(), ['AMPHUR_ID' => 'amphur_AMPHUR_ID1']);
    }

        public function getDistrictDISTRICT()
    {
        return $this->hasOne(District::className(), ['DISTRICT_ID' => 'district_DISTRICT_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrictDISTRICTID1()
    {
        return $this->hasOne(District::className(), ['DISTRICT_ID' => 'district_DISTRICT_ID1']);
    }
    
    
    
    
     public function getFacultyIdFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id_faculty' => 'faculty_id_faculty']);
    }
    
  
    public function getDepartmentIdDepartment()
    {
        return $this->hasOne(Department::className(), ['id_department' => 'department_id_department']);
    }
    
    
}
