<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Announcement;

/**
 * AnnouncementSearch represents the model behind the search form about `common\models\Announcement`.
 */
class AnnouncementSearch extends Announcement
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'start_date', 'end_date', 'posted_by'], 'integer'],
            [['announcement'], 'safe'],
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
        $query = Announcement::find();

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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'posted_by' => $this->posted_by,
        ]);

        $query->andFilterWhere(['like', 'announcement', $this->announcement]);

        return $dataProvider;
    }

}
