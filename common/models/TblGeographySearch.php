<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblGeography;

/**
 * TblGeographySearch represents the model behind the search form about `common\models\TblGeography`.
 */
class TblGeographySearch extends TblGeography
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GEO_ID'], 'integer'],
            [['GEO_NAME'], 'safe'],
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
        $query = TblGeography::find();

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
            'GEO_ID' => $this->GEO_ID,
        ]);

        $query->andFilterWhere(['like', 'GEO_NAME', $this->GEO_NAME]);

        return $dataProvider;
    }
}
