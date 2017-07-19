<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use kartik\password\StrengthValidator;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $username;
    public $email;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            // common validation rules
            [['username', 'email'], 'trim'],
            [['username', 'email'], 'filter', 'filter' => 'strtolower'],
            [['username', 'email', 'password'], 'required'],
            // username specific rules
            ['username', 'unique', 'targetClass' => '\common\models\User',
                'message' => Yii::t('app', 'This username has already been taken.')],
            ['username', 'string', 'min' => 2, 'max' => 255],
            // email specific rules
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User',
                'message' => Yii::t('app', 'This email address has already been taken.')],
            // password specific rules
            ['password', StrengthValidator::className(), 'preset' => StrengthValidator::NORMAL, 'min' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints() {
        return [
            'username' => Yii::t('app', '{fieldName} is case insensitve', [
                'fieldName' => $this->getAttributeLabel('username')]),
            'email' => Yii::t('app', '{fieldName} is case insensitve', [
                'fieldName' => $this->getAttributeLabel('email')]),
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}
