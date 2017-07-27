<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subnet;

/**
 * SubnetSearch represents the model behind the search form about `common\models\Subnet`.
 */
class SubnetSearch extends Subnet {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id'], 'integer'],
            [['name'], 'safe'],
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
        $query = Subnet::find();

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
            'vlan_id' => $this->vlan_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'network_id', $this->network_id])
                ->andFilterWhere(['like', 'subnet_mask', $this->subnet_mask])
                ->andFilterWhere(['like', 'gateway', $this->gateway])
                ->andFilterWhere(['like', 'broadcast_address', $this->broadcast_address])
                ->andFilterWhere(['like', 'cidr_notation', $this->cidr_notation])
                ->andFilterWhere(['like', 'dhcp_range', $this->dhcp_range])
                ->andFilterWhere(['like', 'vlan_name', $this->vlan_name]);

        return $dataProvider;
    }

}
