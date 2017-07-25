<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class EngineeringController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'info' => [
                'class' => 'yii\web\ViewAction',
                'viewPrefix' => 'info',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays the Engineering section homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');
    }

    /**
     * Displays the Documents Listing.
     *
     * @return mixed
     */
    public function actionDocuments() {
        $this->viewPath = Yii::getAlias($this->viewPath . '/documents');
        return $this->render('index', [
                    'model' => null,
        ]);
    }

    /**
     * Displays the Local Area Networking (LAN) homepage.
     *
     * @return mixed
     */
    public function actionLocalNetwork() {
        return $this->render('networksIndex');
    }

    /**
     * Displays the Programming Contactc.
     *
     * @return mixed
     */
    public function actionProgramming() {
        return $this->render('networksIndex');
    }

    /**
     * Displays the Support Contacts.
     *
     * @return mixed
     */
    public function actionSupport() {
        return $this->render('networksIndex');
    }

}
