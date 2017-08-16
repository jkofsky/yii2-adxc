<?php

namespace common\models;

use Yii;
use \common\components\CIDR;

/**
 * This is the model class for table "{{%subnet}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $short_name 
 * @property string $cidr_block
 * @property string $network_id
 * @property string $subnet_mask
 * @property string $broadcast_address
 * @property string $gateway
 * @property integer $gateway_id
 * @property string $dhcp_range
 * @property integer $vlan_id
 * @property string $vlan_name
 *
 * @property IpAssignment[] $ipAssignments
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
            [['name', 'short_name', 'cidr_block', 'gateway'], 'required'],
            [['cidr_block', 'gateway'], 'ip'],
            //[['gateway'],'ip','range'=>],
            [['gateway_id', 'vlan_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['short_name', 'network_id', 'dhcp_range'], 'string', 'max' => 16],
            [['cidr_block'], 'string', 'max' => 24],
            [['vlan_name'], 'string', 'max' => 32],
            [['short_name'], 'unique'],
            [['cidr_block'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'short_name' => Yii::t('app', 'Short Name'),
            'cidr_block' => Yii::t('app', 'Cidr Block'),
            'network_id' => Yii::t('app', 'Network ID'),
            'subnet_mask' => Yii::t('app', 'Subnet Mask'),
            'gateway' => Yii::t('app', 'Default Gateway'),
            'gateway_id' => Yii::t('app', 'Default Gateway'),
            'broadcast_address' => Yii::t('app', 'Broadcast Address'),
            'dhcp_range' => Yii::t('app', 'DHCP Range'),
            'vlan_id' => Yii::t('app', 'VLAN ID'),
            'vlan_name' => Yii::t('app', 'VLAN Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIpAssignments() {
        return $this->hasMany(IpAssignment::className(), ['subnet_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function beforeValidate() {
        if (!empty($this->cidr_block)) {
            $range = CIDR::cidrToRange($this->cidr_block);
            $this->network_id = $range[0];
            $this->broadcast_address = $range[1];

            $cidr = substr(strrchr($this->cidr_block, "/"), 1);
            $this->cidr_block = $range[0] . '/' . $cidr;
            $this->subnet_mask = CIDR::CIDRtoMask($cidr);
        }
        return parent::beforeValidate();
    }

}
