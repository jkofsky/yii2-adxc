<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
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
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
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
    public function rules()
    {
        return [
            [['start_date', 'announcement'], 'required'],
            [['start_date', 'end_date', 'posted_by'], 'integer'],
            [['announcement'], 'string', 'max' => 255],
            [['posted_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['posted_by' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
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
    public function getPostedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'posted_by']);
    }
}
