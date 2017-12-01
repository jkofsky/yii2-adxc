<?php

namespace common\modules\podcast\controllers;

/**
 * Controller for the WNRP Podcasts
 */
class WyctController extends \yii\web\Controller {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }

}
