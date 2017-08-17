<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "{{%department}}".
 *
 * @property integer $id
 * @property string $dept_name
 *
 * @property Profile[] $profiles
 */
class Department extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%department}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['dept_name'], 'filter', 'filter' => 'trim', 'skipOnEmpty' => true],
            [['dept_name'], 'required'],
            [['dept_name'], 'string', 'max' => 255],
            [['dept_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'dept_name' => Yii::t('app', 'Department Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles() {
        return $this->hasMany(Profile::className(), ['department_id' => 'id']);
    }

    /**
     * get Department name
     *
     */
    public function getDepartmentName() {
        return $this->dept_name ? $this->dept_name : '- not assigned -';
    }

    /**
     * get list of Departments for dropdown
     */
    public static function getDepartmentList() {
        $droptions = Department::find()->asArray()->all();
        return ArrayHelper::map($droptions, 'id', 'dept_name');
    }

}
