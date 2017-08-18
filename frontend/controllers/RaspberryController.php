<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use yii\helpers\Html;

/**
 * Raspberry controller
 */
class RaspberryController extends Controller {

    /**
     *
     * @var string override the default layout for this controller
     */
    public $layout = 'raspberry';

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['refresh'],
                'rules' => [
                    // allow only AJAX requests using the post Method
                    [
                        'allow' => true,
                    //'ajax' => true,
                    //'verbs' => ['POST']
                    ],
                ],
        ]];
    }

    public function actionIndex() {
//        return $this->render('index');
        $nw = new \common\components\noaaWeather();
        $nw->loadData();
        return $this->render('/site/weather', [
                    'nw' => $nw,
        ]);
    }

    static private $_imageNumber = 5;
    static private $_imageIdx = 0;

    public function actionRefresh() {
        $directory = Yii::getAlias('@webroot/piImages');
        $_imageList = array_diff(scandir($directory), array('..', '.'));
        $imgFile;

        if (self::$_imageIdx++ % self::$_imageNumber) {
            $imgFile = 'piImages/' . $_imageList[self::$_imageIdx-1];
            return $this->renderPartial('_refresh', [
                        'imgFile' => $imgFile,
            ]);
        } else {
            //Show weather
        }
        if (self::$_imageIdx >= count($_imageList)) {
            self::$_imageIdx = 0;
        }

        //$imgFile = 'piImages/private_sign.png';
    }

}
