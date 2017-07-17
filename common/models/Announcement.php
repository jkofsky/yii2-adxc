<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;

//use yii\helpers\FormatConverter;

/**
 * This is the model class for table "{{%announcement}}".
 *
 * @property string $id
 * @property integer $start_date
 * @property integer $end_date
 * @property string $announcement
 * @property string $posted_by
 *
 * @property User $postedBy
 */
class Announcement extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%announcement}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'posted_by',
                'updatedByAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['start_date', 'announcement'], 'required'],
            [['end_date'], 'safe'],
            [['start_date', 'end_date'], 'default', 'value' => null],
            [['start_date'], 'date', 'format' => 'm/d/yyyy', 'timestampAttribute' => 'start_date'],
            [['end_date'], 'date', 'format' => 'm/d/yyyy', 'timestampAttribute' => 'end_date'],
            //[['start_date', 'end_date'], 'date', 'format' => 'medium'],
            //[['start_date', 'end_date'], 'filter', 'filter' => 'strtotime'],
            [['announcement'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'announcement' => Yii::t('app', 'Announcement'),
            'posted_by' => Yii::t('app', 'Posted By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostedBy() {
        return $this->hasOne(User::className(), ['id' => 'posted_by']);
    }

}
