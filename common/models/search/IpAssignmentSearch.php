<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\IpAssignment;

/**
 * IpAssignmentSearch represents the model behind the search form about `common\models\IpAssignment`.
 */
class IpAssignmentSearch extends IpAssignment
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_type_id', 'subnet_id'], 'integer'],
            [['ipv4_address', 'host_type', 'host_name', 'host_purpose', 'host_location', 'port_access_info', 'public_access_ip'], 'safe'],
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
        $query = IpAssignment::find()->with('subnet')->orderBy('ipv4_address');

        // add conditions that should always apply here
        if (isset($params['networkId'])) {
            $query->where(['subnet_id' => $params['networkId']]);
        }

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
            'host_type_id' => $this->host_type_id,
            'subnet_id' => $this->subnet_id,
        ]);

        $query->andFilterWhere(['like', 'ipv4_address', $this->ipv4_address])
                ->andFilterWhere(['=', 'host_type', $this->host_type])
                ->andFilterWhere(['like', 'host_name', $this->host_name])
                ->andFilterWhere(['like', 'host_purpose', $this->host_purpose])
                ->andFilterWhere(['like', 'host_location', $this->host_location]);

        return $dataProvider;
    }

}
