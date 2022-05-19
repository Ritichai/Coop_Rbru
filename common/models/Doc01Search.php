<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Doc01;
use common\models\User;
use common\models\UserSearch;;
/**
 * Doc01Search represents the model behind the search form about `common\models\Doc01`.
 */
class Doc01Search extends Doc01
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_doc_01', 'title_name_th_id', 'title_name_en_id', 'year_in_school_id_year', 'faculty_id_faculty', 'department_id_department', 'credit', 'semester_Id_semester', 'year_Id_year', 'province_PROVINCE_ID', 'amphur_AMPHUR_ID', 'district_DISTRICT_ID', 'Cell_phone_num', 'Phone_num', 'province_PROVINCE_ID1', 'amphur_AMPHUR_ID1', 'district_DISTRICT_ID1', 'title_name_th_id_title_name_th', 'Cell_phone_num3', 'skillpoint_en', 'skillpoint_jp', 'skillpoint_cn', 'geo_interested', 'in_position_id', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['Fname_th', 'Lname_th', 'Num_student', 'Fname_en', 'Lname_en', 'Detail_address', 'Email', 'Detail_address2', 'Fname_th2', 'Lname_th2', 'Relation', 'Talent', 'Interest_academic'], 'safe'],
            [['GPA'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Doc01::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        
           
        // grid filtering conditions
     
        $query->andFilterWhere([
            'Id_doc_01' => $this->Id_doc_01,
            'title_name_th_id' => $this->title_name_th_id,
            'title_name_en_id' => $this->title_name_en_id,
            'year_in_school_id_year' => $this->year_in_school_id_year,
            'faculty_id_faculty' => $this->faculty_id_faculty,
            'department_id_department' => $this->department_id_department,
            'credit' => $this->credit,
            'GPA' => $this->GPA,
            'semester_Id_semester' => $this->semester_Id_semester,
            'year_Id_year' => $this->year_Id_year,
            'province_PROVINCE_ID' => $this->province_PROVINCE_ID,
            'amphur_AMPHUR_ID' => $this->amphur_AMPHUR_ID,
            'district_DISTRICT_ID' => $this->district_DISTRICT_ID,
            'Cell_phone_num' => $this->Cell_phone_num,
            'Phone_num' => $this->Phone_num,
            'province_PROVINCE_ID1' => $this->province_PROVINCE_ID1,
            'amphur_AMPHUR_ID1' => $this->amphur_AMPHUR_ID1,
            'district_DISTRICT_ID1' => $this->district_DISTRICT_ID1,
            'title_name_th_id_title_name_th' => $this->title_name_th_id_title_name_th,
            'Cell_phone_num3' => $this->Cell_phone_num3,
            'skillpoint_en' => $this->skillpoint_en,
            'skillpoint_jp' => $this->skillpoint_jp,
            'skillpoint_cn' => $this->skillpoint_cn,
            'geo_interested' => $this->geo_interested,
            'in_position_id' => $this->in_position_id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'Fname_th', $this->Fname_th])
            ->andFilterWhere(['like', 'Lname_th', $this->Lname_th])
            ->andFilterWhere(['like', 'Num_student', $this->Num_student])
            ->andFilterWhere(['like', 'Fname_en', $this->Fname_en])
            ->andFilterWhere(['like', 'Lname_en', $this->Lname_en])
            ->andFilterWhere(['like', 'Detail_address', $this->Detail_address])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Detail_address2', $this->Detail_address2])
            ->andFilterWhere(['like', 'Fname_th2', $this->Fname_th2])
            ->andFilterWhere(['like', 'Lname_th2', $this->Lname_th2])
            ->andFilterWhere(['like', 'Relation', $this->Relation])
            ->andFilterWhere(['like', 'Talent', $this->Talent])
            ->andFilterWhere(['like', 'Interest_academic', $this->Interest_academic]);

        return $dataProvider;
    }
}
