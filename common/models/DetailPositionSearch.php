<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DetailPosition;

/**
 * DetailPositionSearch represents the model behind the search form about `common\models\DetailPosition`.
 */
class DetailPositionSearch extends DetailPosition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_detail_position', 'ID_company', 'ID_ttl_position', 'Num_student', 'ID_fac'], 'integer'],
            [['name_position', 'time', 'Detail'], 'safe'],
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
        $query = DetailPosition::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
                 'sort' => [                
            'defaultOrder'=>[
            'time'=> 'SORT_DESC',
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
            'ID_detail_position' => $this->ID_detail_position,
            'ID_company' => $this->ID_company,
            'ID_ttl_position' => $this->ID_ttl_position,
            'Num_student' => $this->Num_student,
          //  'time' => $this->time,
            'ID_fac' => $this->ID_fac,
            
        ]);
        
         $date = explode('&', $this->time);
        if (count($date) > 1) {
            $date1 = date("Y-m-d", strtotime($date[0]));
            $date2 = date("Y-m-d", strtotime($date[1]));
            $query->andFilterWhere(['and', 'time >= "' . $date1 . '"', 'time <= "' . $date2 . '"']);
        } else {
            $query->andFilterWhere(['time' => $this->time]);
        }


        $query->andFilterWhere(['like', 'name_position', $this->name_position])
            ->andFilterWhere(['like', 'Detail', $this->Detail]);

        return $dataProvider;
    }
}
