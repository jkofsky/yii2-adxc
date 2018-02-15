<?php

namespace common\modules\podcast\controllers;

use Yii;
/**
 * Controller for the WNRP Podcasts
 */
class WyctController extends PodcastController
{

    /**
     * @inheritdoc
     */
    public function getViewPath()
    {
        return Yii::getAlias('@common/modules/podcast/views/podcast');
    }

}
