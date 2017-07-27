<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Subnet;

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
        return $this->render('documents/index', [
                    'model' => null,
        ]);
    }
    /**
     * Displays information about Network IP Addresses
     */

    /**
     * Display information about the Local Area Networking (LAN) IP Addresses.
     *
     * @param integer $networkId
     * @return mixed
     */
    public function actionLocalNetwork($networkId = null) {
        if (empty($networkId)) {
            // show the Network index page
            $subNet = Subnet::find()->orderBy('name')->all();
            return $this->render('networksIndex', [
                        'subnetModel' => $subNet,
            ]);
        } else {
            $pageTitle = 'Hello';
            
            // show the listing of the Network IP assignments
            return $this->render('networks', [
                        'networkModel' => null,
                        'pageTitle' => $pageTitle,
            ]);
        }
    }

    /**
     * Displays the Programming Contacts.
     *
     * @return mixed
     */
    public function actionProgramming() {
        return $this->render('index');
    }

    /**
     * Displays the Support Contacts.
     *
     * @return mixed
     */
    public function actionSupport() {
        return $this->render('index');
    }

}
