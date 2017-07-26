<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%subnet}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $subnet_id
 * @property string $subnet_mask
 * @property string $gateway
 * @property string $broadcast_address
 * @property string $cidr_notation
 * @property string $dhcp_range
 * @property integer $vlan_id
 * @property string $vlan_name
 */
class Subnet extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%subnet}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'name', 'gateway', 'cidr_notation'], 'required'],
            [['id', 'vlan_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['subnet_id', 'subnet_mask', 'gateway', 'broadcast_address'], 'string', 'max' => 15],
            [['cidr_notation', 'dhcp_range'], 'string', 'max' => 24],
            [['vlan_name'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'subnet_id' => Yii::t('app', 'Subnet ID'),
            'subnet_mask' => Yii::t('app', 'Subnet Mask'),
            'gateway' => Yii::t('app', 'Gateway'),
            'broadcast_address' => Yii::t('app', 'Broadcast Address'),
            'cidr_notation' => Yii::t('app', 'Cidr Notation'),
            'dhcp_range' => Yii::t('app', 'Dhcp Range'),
            'vlan_id' => Yii::t('app', 'Vlan ID'),
            'vlan_name' => Yii::t('app', 'Vlan Name'),
        ];
    }

}
