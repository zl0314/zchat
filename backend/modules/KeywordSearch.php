<?php

namespace backend\modules;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Keyword;

/**
 * KeywordSearch represents the model behind the search form about `common\models\Keyword`.
 */
class KeywordSearch extends Keyword
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'target_id', 'type'], 'integer'],
            [['target_table', 'keyword'], 'safe'],
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
        $query = Keyword::find();

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
            'id' => $this->id,
            'target_id' => $this->target_id,
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'target_table', $this->target_table])
            ->andFilterWhere(['like', 'keyword', $this->keyword]);

        return $dataProvider;
    }
}
