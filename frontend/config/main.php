<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
            'backendUrlManager' => require __DIR__ . '/urlManager.php',
            'frontendUrlManager' => require __DIR__ . '/../../frontend/config/urlManager.php',
            'apiUrlManager' => require __DIR__ . '/../../api/config/urlManager.php',
            'consoleUrlManager' => require __DIR__ . '/../../console/config/urlManager.php',
            'urlManager' => function () {
                return Yii::$app->get('frontendUrlManager');
        },
        'view' => [
            'theme' => [
                'basePath' => '@frontend/themes/EShopper',
                'baseUrl' => '@web/themes/EShopper',
                'pathMap' => [
                    '@frontend/themes/EShopper'
                ],
            ],
        ],
    ],
    'params' => $params,
];
