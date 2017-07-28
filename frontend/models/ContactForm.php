<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $department;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
            //
            [['department'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['employee'] = ['subject', 'body', 'verifyCode', 'department'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'verifyCode' => Yii::t('app', 'Verification Code'),
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email) {
        return Yii::$app->mailer->compose()
                        ->setTo($email)
                        ->setFrom([$this->email => $this->name])
                        ->setSubject($this->subject)
                        ->setTextBody($this->body)
                        ->send();
    }

    /**
     * Sends an email to the specified department members using the information 
     * collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendDepartmentEmail($department = null) {
        $query = \common\models\User::find()->where(['is_active' => \common\models\User::STATUS_ACTIVE])
                ->joinWith('profile');

        if (!is_null($department)) {
            $query->andWhere(['profile.department_id' => $department]);
        }
        $users = $query->all();

        if ($users) {
            $messages = [];
            foreach ($users as $user) {
                $messages[] = Yii::$app->mailer->compose()
                        ->setFrom([Yii::$app->user->identity->email => Yii::$app->user->identity->profile->fullName])
                        ->setSubject($this->subject)
                        ->setTextBody($this->body)
                        ->setTo([$user->email => $user->profile->fullName]);
            }
            return Yii::$app->mailer->sendMultiple($messages);
        }
        return false;
    }

}
