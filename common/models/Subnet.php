<?php

namespace common\models;

use Yii;
use \common\components\CIDR;

/**
 * This is the model class for table "{{%subnet}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $subnet_id
 * @property string $subnet_mask
 * @property string $gateway_id
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
            [['name', 'gateway_id', 'cidr_notation'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['gateway_id', 'broadcast_address', 'dhcp_range'], 'string', 'max' => 16],
            [['cidr_notation'], 'string', 'max' => 24],
            [['vlan_id'], 'integer'],
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
            'gateway_id' => Yii::t('app', 'Default Gateway'),
            'broadcast_address' => Yii::t('app', 'Broadcast Address'),
            'cidr_notation' => Yii::t('app', 'Network Segment'),
            'dhcp_range' => Yii::t('app', 'DHCP Range'),
            'vlan_id' => Yii::t('app', 'VLAN ID'),
            'vlan_name' => Yii::t('app', 'VLAN Name'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert) {
        $range = CIDR::cidrToRange($this->cidr_notation);
        $this->subnet_id = $range[0];
        $this->broadcast_address = $range[1];

        $cidr = substr(strrchr($this->cidr_notation, "/"), 1);
        $this->cidr_notation = $range[0] . '/' . $cidr;
        $this->subnet_mask = CIDR::CIDRtoMask($cidr);
        return parent::beforeSave($insert);
    }

}