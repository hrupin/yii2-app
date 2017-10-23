<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
        'backendUrlManager' => require __DIR__ . '/urlManager.php',
        'frontendUrlManager' => require __DIR__ . '/../../frontend/config/urlManager.php',
        'apiUrlManager' => require __DIR__ . '/../../api/config/urlManager.php',
        'consoleUrlManager' => require __DIR__ . '/../../console/config/urlManager.php',
        'urlManager' => function () {
            return Yii::$app->get('apiUrlManager');
        },
    ],
    'modules' => [
        'user' => [
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
        'v1' => [
            'class' => 'api\modules\v1',
        ],
    ],
    'params' => $params,
];
