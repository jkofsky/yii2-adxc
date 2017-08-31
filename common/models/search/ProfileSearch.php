<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `common\models\Profile`.
 */
class ProfileSearch extends Profile
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'department_id', 'is_management', 'extension', 'speed_dial', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'address', 'city', 'state', 'postal_code', 'cell_phone', 'home_phone', 'birth_date', 'aniversary_date', 'spouse_name', 'hire_date'], 'safe'],
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
        $query = Profile::find();

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
            'user_id' => $this->user_id,
            'birth_date' => $this->birth_date,
            'aniversary_date' => $this->aniversary_date,
            'hire_date' => $this->hire_date,
            'department_id' => $this->department_id,
            'is_management' => $this->is_management,
            'extension' => $this->extension,
            'speed_dial' => $this->speed_dial,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
                ->andFilterWhere(['like', 'last_name', $this->last_name])
                ->andFilterWhere(['like', 'address', $this->address])
                ->andFilterWhere(['like', 'city', $this->city])
                ->andFilterWhere(['like', 'state', $this->state])
                ->andFilterWhere(['like', 'postal_code', $this->postal_code])
                ->andFilterWhere(['like', 'cell_phone', $this->cell_phone])
                ->andFilterWhere(['like', 'home_phone', $this->home_phone])
                ->andFilterWhere(['like', 'spouse_name', $this->spouse_name]);

        return $dataProvider;
    }

}
