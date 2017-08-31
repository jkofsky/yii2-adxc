<?php

return [
    'timezone' => 'America/Chicago',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'podcast' => [
            'class' => 'common\modules\podcast\Podcast',
        ],
        'ticket' => [
            'class' => 'common\modules\discrepency\Ticket',
        ],
    ],
];
