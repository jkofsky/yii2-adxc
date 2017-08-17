<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%ip_assignment}}".
 *
 * @property string $id
 * @property string $host_type_id
 * @property string $subnet_id
 * @property string $ipv4_address
 * @property string $host_type
 * @property string $host_name
 * @property string $host_purpose
 * @property string $host_location
 * @property string $port_access_info
 * @property string $public_access_ip
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Subnet $subnet
 */
class IpAssignment extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ip_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ipv4_address', 'host_name', 'host_purpose', 'host_location', 'host_type', 'subnet_id'], 'required'],
            [['host_type_id', 'subnet_id'], 'integer'],
            [['host_type', 'port_access_info'], 'string'],
            [['ipv4_address', 'public_access_ip'], 'string', 'max' => 16],
            [['host_name'], 'string', 'max' => 32],
            [['host_purpose', 'host_location'], 'string', 'max' => 64],
            [['subnet_id', 'ipv4_address'], 'unique', 'targetAttribute' => ['subnet_id', 'ipv4_address'], 'message' => 'The combination of Subnet ID and Ipv4 Address has already been taken.'],
            [['subnet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subnet::className(), 'targetAttribute' => ['subnet_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'host_type_id' => Yii::t('app', 'Host Type'),
            'subnet_id' => Yii::t('app', 'Subnet'),
            'ipv4_address' => Yii::t('app', 'Static IP Address'),
            'host_type' => Yii::t('app', 'Host Type'),
            'host_name' => Yii::t('app', 'Host Name'),
            'host_purpose' => Yii::t('app', 'Host Purpose'),
            'host_location' => Yii::t('app', 'Host Location'),
            'port_access_info' => Yii::t('app', 'Port Access Info'),
            'public_access_ip' => Yii::t('app', 'Public Access IP'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubnet()
    {
        return $this->hasOne(Subnet::className(), ['id' => 'subnet_id']);
    }

}
