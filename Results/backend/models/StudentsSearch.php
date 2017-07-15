<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Students;

/**
 * StudentsSearch represents the model behind the search form about `backend\models\Students`.
 */
class StudentsSearch extends Students
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['std_id', 'std_contact_no', 'std_class'], 'integer'],
            [['std_name', 'std_email', 'std_address'], 'safe'],
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
        $query = Students::find();

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
            'std_id' => $this->std_id,
            'std_contact_no' => $this->std_contact_no,
            'std_class' => $this->std_class,
        ]);

        $query->andFilterWhere(['like', 'std_name', $this->std_name])
            ->andFilterWhere(['like', 'std_email', $this->std_email])
            ->andFilterWhere(['like', 'std_address', $this->std_address]);

        return $dataProvider;
    }
}
