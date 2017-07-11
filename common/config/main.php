<?php

return [
    'timezone' => 'America/Chicago',    
    'name'=> 'ADXC IntraNet',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
