<?php

namespace frontend\models;

use yii\base\Model;
use yii\base\InvalidParamException;
use common\models\User;
use kartik\password\StrengthValidator;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{

    public $password;
    // @vars for use with StrengthValidator
    public $username;
    public $email;

    /**
     * @var \common\models\User
     */
    private $_user;

    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidParamException('Password reset token cannot be blank.');
        }
        $this->_user = User::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidParamException('Wrong password reset token.');
        }
        $this->username = $this->_user->username;
        $this->email = $this->_user->email;
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', StrengthValidator::className(), 'preset' => StrengthValidator::NORMAL],
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }

}
