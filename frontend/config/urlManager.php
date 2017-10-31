<?php

use yii\web\UrlNormalizer;

/** @var array $params */

return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
//    'normalizer' => [
//        'class' => 'yii\web\UrlNormalizer',
//        'action' => UrlNormalizer::ACTION_REDIRECT_TEMPORARY,
//    ],
    'rules' => [
        '/' => 'site/index',
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    ],
];