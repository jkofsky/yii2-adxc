<?php

namespace common\modules\podcast;

/**
 * podcast module definition class
 */
class Podcast extends \yii\base\Module {

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'common\modules\podcast\controllers';

    /**
     * @inheritdoc
     */
    public $defaultRoute = 'podcast';

    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();

        // custom initialization code goes here
    }

}
