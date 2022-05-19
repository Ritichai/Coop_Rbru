<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SubPosition;

/**
 * SubPositionSearch represents the model behind the search form about `common\models\SubPosition`.
 */
class SubPositionSearch extends SubPosition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_sub', 'updated_by', 'updated_at', 'ID_detail_positions'], 'integer'],
            [['status', 'created_by', 'created_at'], 'safe'],
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
        $query = SubPosition::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
              'sort' => [                
            'defaultOrder'=>[
            'created_at'=> 'SORT_DESC',
                    ]
               ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID_sub' => $this->ID_sub,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            // 'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'ID_detail_positions' => $this->ID_detail_positions,
        ]);

        $date = explode('&', $this->created_at);
        if (count($date) > 1) {
            $date1 = date("Y-m-d", strtotime($date[0]));
            $date2 = date("Y-m-d", strtotime($date[1]));
            $query->andFilterWhere(['and', 'created_at >= "' . $date1 . '"', 'created_at <= "' . $date2 . '"']);
        } else {
            $query->andFilterWhere(['createDate' => $this->created_at]);
        }

        $query->andFilterWhere(['like', 'status', $this->status]);
        $query->andFilterWhere(['like', 'created_by', $this->created_by]);

        return $dataProvider;
    }
}