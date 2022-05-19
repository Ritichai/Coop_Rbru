<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TitleNameTh;

/**
 * TitleNameThSearch represents the model behind the search form about `common\models\TitleNameTh`.
 */
class TitleNameThSearch extends TitleNameTh
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_title_name_th'], 'integer'],
            [['name_title_name_th'], 'safe'],
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
        $query = TitleNameTh::find();

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
            'id_title_name_th' => $this->id_title_name_th,
        ]);

        $query->andFilterWhere(['like', 'name_title_name_th', $this->name_title_name_th]);

        return $dataProvider;
    }
}
