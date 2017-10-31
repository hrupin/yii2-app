<?php

namespace common\modules\hello;

use yii\base\Application;
use yii\base\Module as BaseModule;
use common\models\interfaces\ModuleInterface;

/**
 * Class Admin Module
 * @package app\modules\admin
 */
class Module extends BaseModule implements ModuleInterface
{
    /**
     * @var string the namespace that controller classes are in.
     */
    public $controllerNamespace = 'common\modules\hello\controllers';

    /**
     * Initializes the module.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *  @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'hello' => 'hello/default/test',
        ]);
    }
}