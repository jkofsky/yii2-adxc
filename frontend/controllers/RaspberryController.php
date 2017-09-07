<?php

namespace frontend\controllers;

use common\models\Announcement;

class RaspberryController extends \yii\web\Controller {

    public $layout = 'raspberry';

    public function actionIndex() {
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

    public function actionWeather() {
        $nw = new \common\components\noaaWeather();
        $nw->loadData();
        return $this->render('weatherMobile', [
                    'nw' => $nw,
        ]);
    }

}
