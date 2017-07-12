<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%profile}}".
 *
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $cell_phone
 * @property string $home_phone
 * @property string $birth_date
 * @property string $aniversary_date
 * @property string $spouse_name
 * @property string $hire_date
 * @property string $department_id
 * @property integer $is_management
 * @property integer $extension
 * @property integer $speed_dial
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%profile}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['first_name', 'last_name', 'city', 'spouse_name', 'address', 'state', 'postal_code', 'cell_phone', 'home_phone'], 'trim', 'skipOnEmpty' => true],
            [['first_name', 'last_name', 'city', 'spouse_name', 'address', 'state', 'postal_code', 'cell_phone', 'home_phone', 'birth_date', 'aniversary_date', 'hire_date'], 'default', 'value' => null],
            [['first_name', 'last_name'], 'required'],
            [['department_id', 'is_management', 'extension', 'speed_dial'], 'integer'],
            [['birth_date', 'aniversary_date', 'hire_date'], 'safe'],
            [['first_name', 'last_name', 'city', 'spouse_name'], 'string', 'max' => 64],
            [['address'], 'string', 'max' => 128],
            [['state'], 'string', 'max' => 2],
            [['postal_code'], 'string', 'max' => 10],
            [['cell_phone', 'home_phone'], 'string', 'max' => 16],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'cell_phone' => Yii::t('app', 'Cell Phone'),
            'home_phone' => Yii::t('app', 'Home Phone'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'aniversary_date' => Yii::t('app', 'Aniversary Date'),
            'spouse_name' => Yii::t('app', 'Spouse Name'),
            'hire_date' => Yii::t('app', 'Hire Date'),
            'department_id' => Yii::t('app', 'Department ID'),
            'is_management' => Yii::t('app', 'Is Management'),
            'extension' => Yii::t('app', 'Extension'),
            'speed_dial' => Yii::t('app', 'Speed Dial'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}
