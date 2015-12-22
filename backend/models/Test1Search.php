<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Test1;

/**
 * Test1Search represents the model behind the search form about `backend\models\Test1`.
 */
class Test1Search extends Test1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'age'], 'integer'],
            [['user_name'], 'safe'],
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
        $query = Test1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'user_id' => $this->user_id,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name]);

        return $dataProvider;
    }
}
