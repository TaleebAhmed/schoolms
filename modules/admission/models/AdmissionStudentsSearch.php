<?php

namespace app\modules\admission\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admission\models\AdmissionStudents;

/**
 * AdmissionStudentsSearch represents the model behind the search form of `app\modules\admission\models\AdmissionStudents`.
 */
class AdmissionStudentsSearch extends AdmissionStudents
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'admission_application_id', 'age'], 'integer'],
            [['admission_type', 'first_name', 'surname', 'date_of_birth', 'gender', 'any_learning_difficulties', 'any_known_disabilities', 'any_known_allergies', 'medications', 'any_medication_allergies', 'previous_school_name', 'school_suburb', 'previous_class'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = AdmissionStudents::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'admission_application_id' => $this->admission_application_id,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'admission_type', $this->admission_type])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'any_learning_difficulties', $this->any_learning_difficulties])
            ->andFilterWhere(['like', 'any_known_disabilities', $this->any_known_disabilities])
            ->andFilterWhere(['like', 'any_known_allergies', $this->any_known_allergies])
            ->andFilterWhere(['like', 'medications', $this->medications])
            ->andFilterWhere(['like', 'any_medication_allergies', $this->any_medication_allergies])
            ->andFilterWhere(['like', 'previous_school_name', $this->previous_school_name])
            ->andFilterWhere(['like', 'school_suburb', $this->school_suburb])
            ->andFilterWhere(['like', 'previous_class', $this->previous_class]);

        return $dataProvider;
    }
}
