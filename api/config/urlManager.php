<?php
/** @var array $params */
return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['apiHostInfo'],
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'user',
        ]
    ],
];