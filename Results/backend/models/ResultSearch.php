<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Result;

/**
 * ResultSearch represents the model behind the search form about `backend\models\Result`.
 */
class ResultSearch extends Result
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rs_id', 'students_std_id',
            'maths', 'physics', 'chemistry',
             'english', 'urdu', 'total_marks'], 'integer'],
            [['grade'], 'safe'],
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
        $query = Result::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //'rs_id' => array('rs_id' => 3),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        //$query
  //    $query->find()->where("rs_id IN(2)");


        $query->andFilterWhere([
            'rs_id' => $this->rs_id,
            'students_std_id' => $this->students_std_id,
            'maths' => $this->maths,
            'physics' => $this->physics,
            'chemistry' => $this->chemistry,
            'english' => $this->english,
            'urdu' => $this->urdu,
            'total_marks' => $this->total_marks,
        ]);

        $query->andFilterWhere(['like', 'grade', $this->grade]);


        return $dataProvider;
    }
}
