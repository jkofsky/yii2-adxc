<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\User;
use common\models\LoginForm;
use common\models\Announcement;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'reading' => [
                'class' => 'yii\web\ViewAction',
                'viewParam' => 'page',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $announceModel = Announcement::find()
                ->joinWith('postedBy')
                ->where(['>=', 'end_date', time()])
                ->orWhere('end_date IS NULL')
                ->andWhere(['<=', 'start_date', time()])
                ->orderBy('Start_date DESC')
                ->all();
        return $this->render('index', [
                    'announceModel' => $announceModel,
                    'birthdayModel' => false,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $userModel = \common\models\User::findIdentity(Yii::$app->user->id);
            if (empty($userModel->last_login)) {
                // First Time
                Yii::$app->session->setFlash('success', Yii::t('app', '<strong>Welcome</strong>. Make sure create your {profileLink}.', [
                            'profileLink' => Html::a('Profile', ['profile/index'], ['class' => "alert-link"])])
                );
            } else {
                Yii::$app->session->setFlash('success', Yii::t('app', '<strong>Welcome Back</strong>. You last visited on: {date} @ {time}', [
                            'date' => Yii::$app->formatter->asDate($userModel->last_login, 'full'),
                            'time' => Yii::$app->formatter->asTime($userModel->last_login, 'medium')
                        ])
                );
            }
            // Update last_login
            $userModel->touch('last_login');

            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs the current user out.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.')
                );
            } else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'There was an error sending your message.'));
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionPhoneList()
    {
        return $this->render('phoneList');
    }

    /**
     * Displays the NOAA current weather conditions.
     * @uses \common\components\noaaWeather()
     * 
     * @return mixed
     */
    public function actionWeather()
    {
        $nw = new \common\components\noaaWeather();
        $nw->loadData();
        return $this->render('weather', [
                    'nw' => $nw,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    /**
     * Change your own password
     */
    public function actionChangePassword()
    {
        $model = User::findOne([
                    'id' => Yii::$app->user->id
        ]);
        $model->generatePasswordResetToken();
        $model->save(false);
        $this->redirect(['reset-password', 'token' => $model->password_reset_token]);
    }

}
