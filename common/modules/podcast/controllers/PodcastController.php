<?php

namespace common\modules\podcast\controllers;

/**
 * Default controller for the `podcast` module
 */
class PodcastController extends \yii\web\Controller {

    /* Override the default layout for this controller. */
    public $layout = 'column2';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

}
