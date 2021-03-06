<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FormatConverter;

/**
 * This is the model class for table "{{%profile}}".
 *
 * @property integer $user_id
 * @property string  $first_name
 * @property string  $last_name
 * @property string  $address
 * @property string  $city
 * @property string  $state
 * @property string  $postal_code
 * @property string  $cell_phone
 * @property integer $home_phone
 * @property integer $birth_date
 * @property integer $aniversary_date
 * @property string  $spouse_name
 * @property integer $hire_date
 * @property integer $department_id
 * @property boolean $is_management
 * @property integer $extension
 * @property integer $speed_dial
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Department $department
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
            [['first_name', 'last_name', 'city', 'spouse_name', 'address', 'state', 'postal_code', 'cell_phone', 'home_phone'], 'trim'],
            [['first_name', 'last_name', 'city', 'spouse_name', 'address', 'state', 'postal_code', 'cell_phone',], 'default', 'value' => null],
            [['first_name', 'last_name'], 'required'],
            [['department_id', 'is_management', 'extension', 'speed_dial'], 'integer'],
            [['birth_date', 'aniversary_date', 'hire_date'], 'default', 'value' => null],
            [['birth_date', 'aniversary_date', 'hire_date'], 'safe'],
            [['first_name', 'last_name', 'city', 'spouse_name'], 'string', 'max' => 64],
            [['address'], 'string', 'max' => 128],
            [['state'], 'filter', 'filter' => 'strtoupper'],
            [['state'], 'string', 'max' => 2],
            [['postal_code'], 'string', 'max' => 10],
            [['cell_phone', 'home_phone'], 'string', 'max' => 16],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
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
            'fullname' => Yii::t('app', 'Name'),
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'cell_phone' => Yii::t('app', 'Cell Phone'),
            'home_phone' => Yii::t('app', 'Home Phone'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'aniversary_date' => Yii::t('app', 'Aniversary Date'),
            'spouse_name' => Yii::t('app', "Spouse's Name"),
            'hire_date' => Yii::t('app', 'Date Hired'),
            'department_id' => Yii::t('app', 'Department'),
            'is_management' => Yii::t('app', 'Management'),
            'extension' => Yii::t('app', 'Extension'),
            'speed_dial' => Yii::t('app', 'Speed Dial'),
            'created_at' => Yii::t('app', 'Created On'),
            'updated_at' => Yii::t('app', 'Last Updated'),
        ];
    }

    public function beforeSave($insert) {
        if (isset($this->birth_date) && is_string($this->birth_date)) {
            $this->birth_date = strtotime($this->birth_date);
        }
        if (isset($this->aniversary_date) && is_string($this->aniversary_date)) {
            $this->aniversary_date = strtotime($this->aniversary_date);
        }
        if (isset($this->hire_date) && is_string($this->hire_date)) {
            $this->hire_date = strtotime($this->hire_date);
        }
        return parent::beforeSave($insert);
    }

    public function afterFind() {
        parent::afterFind();

       if (!empty($this->birth_date)) {
            $this->birth_date = Yii::$app->formatter->asDate($this->birth_date, 'php:m/d/Y');
        }
        if (!empty($this->aniversary_date)) {
            $this->aniversary_date = Yii::$app->formatter->asDate($this->aniversary_date, 'php:m/d/Y');
        }
        if (!empty($this->hire_date)) {
            $this->hire_date = Yii::$app->formatter->asDate($this->hire_date, 'php:m/d/Y');
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment() {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return string
     */
    public function getFullname() {
        return $this->first_name . ' ' . $this->last_name;
    }

}
