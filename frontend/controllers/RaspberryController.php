<?php

namespace frontend\controllers;

use common\models\Announcement;

class RaspberryController extends \yii\web\Controller
{

    public $layout = 'raspberry';

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

    public function actionWeather()
    {
        $nw = new \common\components\noaaWeather();
        $nw->loadData();
        return $this->render('weatherNoaa', [
                    'nw' => $nw,
        ]);
    }

    public function actionWnrpOnair()
    {
        $feeds = simplexml_load_file('http://podcast.newsradio1620.com/index.php/rss.xml');
        return $this->render('wnrpOnair', [
                    'feeds' => $feeds,
        ]);
    }

    public function actionWyctOnair()
    {
//        $playing = simplexml_load_file('http://music.catcountry987.com/playing.xml');
        $history = simplexml_load_file('http://music.catcountry987.com/history.xml');
        return $this->render('wyctOnair', [
//                    'nowPlaying' => $playing,
                    'history' => $history,
        ]);
    }

}
