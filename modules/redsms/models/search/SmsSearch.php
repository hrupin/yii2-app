<?php

namespace modules\redsms\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\redsms\models\forms\SmsForm;
use modules\redsms\models\forms\SmsSearchForm;

/**
 * SmsSearch represents the model behind the search form about `hrupin\redsms\models\Sms`.
 */
class SmsSearch extends SmsSearchForm
{

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
        $query = SmsForm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]]
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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'idSMS', $this->idSMS])
            ->andFilterWhere(['status' => $this->status])
            ->andFilterWhere(['like', 'sender', $this->sender])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
