<?php

namespace app\modules\admission\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admission\models\AdmissionApplication;

/**
 * AdmissionApplicationSearch represents the model behind the search form of `app\modules\admission\models\AdmissionApplication`.
 */
class AdmissionApplicationSearch extends AdmissionApplication
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'father_mobile', 'mother_mobile', 'emergency_contact_number'], 'integer'],
            [['father_first_name', 'father_surname', 'father_email', 'mother_first_name', 'mother_surname', 'mother_email', 'emergency_contact_name', 'relationship_to_student', 'policies'], 'safe'],
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
        $query = AdmissionApplication::find();

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
            'father_mobile' => $this->father_mobile,
            'mother_mobile' => $this->mother_mobile,
            'emergency_contact_number' => $this->emergency_contact_number,
        ]);

        $query->andFilterWhere(['like', 'father_first_name', $this->father_first_name])
            ->andFilterWhere(['like', 'father_surname', $this->father_surname])
            ->andFilterWhere(['like', 'father_email', $this->father_email])
            ->andFilterWhere(['like', 'mother_first_name', $this->mother_first_name])
            ->andFilterWhere(['like', 'mother_surname', $this->mother_surname])
            ->andFilterWhere(['like', 'mother_email', $this->mother_email])
            ->andFilterWhere(['like', 'emergency_contact_name', $this->emergency_contact_name])
            ->andFilterWhere(['like', 'relationship_to_student', $this->relationship_to_student])
            ->andFilterWhere(['like', 'policies', $this->policies]);

        return $dataProvider;
    }
}
