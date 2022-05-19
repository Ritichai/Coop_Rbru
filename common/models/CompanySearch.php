<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Company;

use common\models\Province;

/**
 * CompanySearch represents the model behind the search form about `common\models\Company`.
 */
class CompanySearch extends Company
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          [['ID_Company', 'ID_province', 'ID_amphur', 'ID_district'], 'integer'],
            [['Name_Company', 'Detail_address','company_web'], 'safe'],
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
        $query = Company::find();

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
            'ID_Company'  => $this->ID_Company,
            'ID_province' => $this->ID_province,
            'ID_amphur'   => $this->ID_amphur,
            'ID_district' => $this->ID_district,
        ]);

        $query->andFilterWhere(['like', 'Name_Company', $this->Name_Company])
            ->andFilterWhere(['like', 'Detail_address', $this->Detail_address]);
           
           

        return $dataProvider;
    }
}
