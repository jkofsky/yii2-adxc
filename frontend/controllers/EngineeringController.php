<?php

namespace frontend\controllers;

use Yii;
use yii\bootstrap4\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Subnet;
use common\models\IpAssignment;
use common\models\search\IpAssignmentSearch;

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
            'reading' => [
                'class' => 'yii\web\ViewAction',
                'viewParam' => 'page',
                'viewPrefix' => 'documents'
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
            $searchModel = new IpAssignmentSearch();
            $searchModel->find()->with('subnet')->where(['subnet_id' => $networkId]);
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $subnetModel = Subnet::findOne(['id' => $networkId]);

            // show the listing of the Network IP assignments
            return $this->render('networks', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                        'subnetModel' => $subnetModel,
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
        /*return $this->render('links');*/
    }

    /**
     * Displays the Support Contacts.
     *
     * @return mixed
     */
    public function actionSupport() {
        return $this->render('index');
        /*return $this->render('links');*/
    }

    /**
     * Displays the Web Server/PHP details.
     *
     * @return mixed
     */
    public function actionAdtran() {
        return $this->render('adtran');
    }

    /**
     * Displays the Web Server/PHP details.
     *
     * @return mixed
     */
    public function actionPhpInfo() {
        return $this->render('php_info');
    }

}
