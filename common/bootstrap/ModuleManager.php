<?php

namespace common\bootstrap;

use Yii;
use yii\base\Component;
use yii\base\BootstrapInterface;


/**
 * Class ModuleManager
 * @package common\bootstrap
 *
 * The class collecting the configuration xml, json, php files of the modules and extensions from the folder common\bootstrap.
 * And writes the settings and connection:
 *  - backend\config\main-bootstrap.php
 *  - frontend\config\main-bootstrap.php
 *  - api\config\main-bootstrap.php
 *  - console\config\main-bootstrap.php
 */
class ModuleManager extends Component implements BootstrapInterface
{
    public function bootstrap($app)
    {
        /*
         TODO Здесь пример как надо динамически подключать модули
        Yii::$app->setModule('admin', [
            'class' => 'app\modules\admin\Admin'
        ]);
        Yii::$app->getModule('admin')->bootstrap(Yii::$app);
        Yii::$app->setModule('welcome', [
            'class' => 'app\modules\welcome\Welcome'
        ]);
        Yii::$app->getModule('welcome')->bootstrap(Yii::$app);
        */
//        Yii::$app->setModule('hello', [
//            'class' => 'common\modules\hello\Module'
//        ]);
//        Yii::$app->getModule('hello')->bootstrap(Yii::$app);
    }
}