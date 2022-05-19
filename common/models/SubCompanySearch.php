<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SubCompany;

/**
 * SubCompanySearch represents the model behind the search form about `common\models\SubCompany`.
 */
class SubCompanySearch extends SubCompany
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['updated_by', 'created_at', 'updated_at', 'ID_Company'], 'integer'],
             [['created_by',], 'safe'],
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
        $query = SubCompany::find();

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
        
        
        
        

          $dataProvider = new ActiveDataProvider([
            'query' => $query,
              'sort' => [                
            'defaultOrder'=>[
            'created_at'=> 'SORT_DESC',
                    ]
               ],
        ]);
        
        
        
        // grid filtering conditions
        $query->andFilterWhere([
           'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'ID_Company' => $this->ID_Company,
        ]);
        
        

        return $dataProvider;
    }
}
