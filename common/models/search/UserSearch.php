<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\User;
use \common\models\Profile;

/**
 * UserSearch represents the model behind the search form about `common\models\User`.
 */
class UserSearch extends User {

    /**
     * search properties for related Profile model
     */
    public $first_name;
    public $last_name;
    public $dept_id;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'is_active', 'last_login', 'role_id'], 'integer'],
            [['username', 'email', 'first_name', 'last_name', 'dept_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = User::find();

        // add conditions that should always apply here
        $query->where(['is_active' => User::STATUS_ACTIVE]);
        $query->joinWith(['profile']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // provide sort ability for Related tables
        // First the $first_name
        $dataProvider->sort->attributes['first_name'] = [
            // The tables are the ones our relation are configured to
            'asc' => ['{{%profile}}.first_name' => SORT_ASC],
            'desc' => ['{{%profile}}.first_name' => SORT_DESC],
        ];
        // Lets do the same for $last_name now
        $dataProvider->sort->attributes['last_name'] = [
            'asc' => ['{{%profile}}.last_name' => SORT_ASC],
            'desc' => ['{{%profile}}.last_name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'is_active' => $this->is_active,
            'last_login' => $this->last_login,
            'role_id' => $this->role_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
                ->andFilterWhere(['like', 'email', $this->email])
                // Here we search the attributes of our relations 
                ->andFilterWhere(['like', '{{%profile}}.first_name', $this->first_name])
                ->andFilterWhere(['like', '{{%profile}}.last_name', $this->last_name])
                ->andFilterWhere(['=', '{{%profile}}.department_id', $this->dept_id]);

        return $dataProvider;
    }

}
